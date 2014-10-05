<?php

namespace Bin\Commands\Crawler;

use Fitak\Crawler\Facebook as FbCrawler;
use Bin\Commands\Command;
use ElasticSearch;
use Fitak\Post;
use Fitak\RepositoryContainer;
use KeyValueStorage;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\Question;


class Facebook extends Command
{

	/**
	 * @var ElasticSearch
	 * @inject
	 */
	public $elastic;

	/**
	 * @var RepositoryContainer
	 * @inject
	 */
	public $orm;

	protected function configure()
	{
		$this->setName('crawler:facebook');
	}

	public function invoke(FbCrawler $fb, KeyValueStorage $kvs)
	{
		$accessToken = $kvs->get($kvs::FACEBOOK_ACCESS_TOKEN);
		if (!$accessToken)
		{
			$url = $fb->getLoginUrl();
			$this->out->writeln('<info>Open the following url in browser and authenticate:</info>');
			$this->out->writeln("  $url");
			$this->out->writeln("<info>Once you are done and redirected to http://copy.this.url, copy the full url and paste it here.</info>\n");

			$helper = new QuestionHelper();
			$question = new Question('Return url: ');
			$url = $helper->ask($this->in, $this->out, $question);

			$accessToken = $fb->getAccessTokenFromUrl($url);
			$this->out->writeln("<info>Got access token $accessToken</info>");

			$kvs->save($kvs::FACEBOOK_ACCESS_TOKEN, $accessToken);
		}
		$fb->setSession($accessToken);

		$timestamp = time();
		$since = $kvs->get($kvs::CRAWLER_SINCE);

		$flushCounter = 0;
		foreach ($this->orm->groups->findAll() as $group)
		{
			$this->indexGroup($fb, $group, $since);

			if (++$flushCounter > 50)
			{
				$this->orm->flush();
			}
		}

		// We are saving timestamp from before the crawl so
		// on next iteration we might get some duplicates but
		// we will never lose any posts if crawler is stopped
		$kvs->save($kvs::CRAWLER_SINCE, $timestamp);
	}

	/**
	 * @param FbCrawler $fb
	 * @param \StdClass $group
	 * @param int $since timestamp
	 */
	private function indexGroup(FbCrawler $fb, $group, $since)
	{
		$this->out->writeln("<info>Processing '$group->name' ($group->id)</info>");

		foreach ($fb->getGroupFeedSince($group->id, $since) as $post)
		{
			$this->indexEntry($group, $post, NULL);

			$comments = isset($post->comments) ? $post->comments->data : [];
			foreach ($comments as $comment)
			{
				$this->indexEntry($group, $comment, $post);
			}
		}
	}

	/**
	 * @param \StdClass $group
	 * @param \StdClass $entry
	 * @param NULL|\StdClass $parentTopic
	 */
	protected function indexEntry($group, $entry, $parentTopic = NULL)
	{
		$post = new Post;

		$post->id = preg_replace('~^\d+_~', '', $entry->id);
		$post->message = $entry->message !== NULL ? $entry->message : ''; // can be NULL if caption only picture post is shared
		$post->createdTime = $entry->created_time;
		$post->updatedTime = $entry->updated_time ?: $entry->created_time;
		//$post->commentsCount; // TODO deprecate
		$post->likesCount = $entry->like_count ?: count($entry->likes);
		$post->fromName = $entry->from->name;
		$post->fromId = $entry->from->id;
		$post->caption = strpos($entry->caption, 'Attachment Unavailable') === FALSE ? $entry->caption : NULL;

		$post->type = $entry->type ?: $post::TYPE_STATUS;
		if ($post->type === $post::TYPE_LINK)
		{
			$post->picture = $entry->picture;
			$post->link = $entry->link;
			$post->description = $entry->description;
		}
		else if ($post->type === $post::TYPE_PHOTO)
		{
			$post->picture = $entry->picture;
			$post->link = $entry->link;
		}
		else if ($post->type === $post::TYPE_VIDEO)
		{
			$post->source = $entry->source;
			$post->description = $entry->description;
		}

		$this->orm->posts->attach($post);
		$post->parent = $parentTopic->id;
		$post->group = $group->id;

		$this->orm->posts->persist($post);
	}

}
