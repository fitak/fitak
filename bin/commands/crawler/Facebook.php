<?php

namespace Bin\Commands\Crawler;

use Facebook\FacebookRequestException;
use Fitak\Crawler\Facebook as FbCrawler;
use Bin\Commands\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use ElasticSearch;
use Facebook\Entities\AccessToken;
use Fitak\DuplicateEntryException;
use Fitak\InvalidAccessTokenException;
use Fitak\Post;
//use Fitak\RepositoryContainer;
use KeyValueStorage;
use Tags;
use Fitak\Orm;



class Facebook extends Command
{

	/**
	 * @var ElasticSearch
	 * @inject
	 */
	public $elastic;

	/**
	 * @var Orm
	 * @inject
	 */
	public $orm;

	/**
	 * @var Tags
	 * @inject
	 */
	public $tagParser;

	protected function configure()
	{
		$this->setName('crawler:facebook');
		$this->addOption('flushLimit', null, InputOption::VALUE_OPTIONAL,
			'After how many persists posts should be flushed to DB (default 50)',
			5);
		$this->addOption('exit', null, InputOption::VALUE_NONE,
			'If set, crawler exits after DB flush (debugging option)');
	}

	public function invoke(FbCrawler $fb, KeyValueStorage $kvs)
	{
		$code = $kvs->get($kvs::FACEBOOK_ACCESS_TOKEN);
		$expires = $kvs->get($kvs::FACEBOOK_ACCESS_TOKEN_EXPIRES);
		$accessToken = new AccessToken($code, $expires);

		if (!$code || $accessToken->getExpiresAt()->getTimestamp() <= time())
		{
			throw new InvalidAccessTokenException("Authenticate by invoking 'auth:facebook'");
		}

		if (!$accessToken->isLongLived() || $accessToken->getExpiresAt()->getTimestamp() < strToTime('+1 week'))
		{
			$accessToken = $accessToken->extend();
			$this->out->writeln("<info>Extended access token</info>");
			$kvs->save($kvs::FACEBOOK_ACCESS_TOKEN, (string) $accessToken);
		}

		if ($this->out->isVerbose())
		{
			$expires = $accessToken->getExpiresAt()->format('Y-m-d H:i');
			$this->out->writeln("Token expires at $expires");
		}

		$fb->setSession($accessToken);

		foreach ($this->orm->groups->findAll() as $group)
		{
			try
			{
				$this->indexGroup($fb, $group, $kvs);
			}
			catch (FacebookRequestException $e)
			{
				if ($e->getCode() === 2)
				{
					// This is a transient facebook error.
					// Seems it happens upon requesting old records.
					$this->out->writeln('<error>Transient facebook error, skipping this group</error>');
					continue;
				}
				throw $e;
			}
		}
	}

	/**
	 * @param FbCrawler $fb
	 * @param \StdClass $group
	 * @param KeyValueStorage $kvs
	 */
	private function indexGroup(FbCrawler $fb, $group, KeyValueStorage $kvs)
	{
		//number of posts to persist before flush to DB
		$flushLimit = $this->in->getOption('flushLimit') - 1;
		$this->out->writeln("<info>Processing '$group->name'</info>");

		$timestamp = time();
		$key = $kvs::CRAWLER_SINCE . '.' . $group->id;
		$since = $kvs->get($key);

		$flushCounter = 0;
		foreach ($fb->getGroupFeedSince($group->id, $since) as $post)
		{
			if ($this->out->isVerbose() && !$this->out->isVeryVerbose())
			{
				$this->out->writeln("    <info>post $post->id ($post->created_time)</info>");
			}
			$this->indexEntry($group, $post, NULL);

			foreach ($fb->getComments($post) as $comment)
			{
				$this->indexEntry($group, $comment, $post);
				foreach ($fb->getComments($comment) as $reply)
				{
					$this->indexEntry($group, $reply, $comment);
				}
			}
			if (++$flushCounter > $flushLimit)
			{
				$this->orm->flush();
				$flushCounter = 0;
				if ($this->in->getOption('exit'))
				{
					//exit after flush (for debugging purposes)
					exit();
				}
			}
		}

		// We are saving timestamp from before the crawl so
		// on next iteration we might get some duplicates but
		// we will never lose any posts if crawler is stopped
		$kvs->save($key, $timestamp);
		$this->orm->flush();
	}

	private function parseId($longId)
	{
		return preg_replace('~^\d+_~', '', $longId);
	}

	/**
	 * @param \StdClass $group
	 * @param \StdClass $entry
	 * @param NULL|\StdClass $parentTopic
	 */
	protected function indexEntry($group, $entry, $parentTopic = NULL)
	{
		if ($this->out->isVeryVerbose())
		{
			$this->out->write($parentTopic ? 'c' : 'p');
		}
		$id = $this->parseId($entry->id);
		$this->out->writeln("Id: $id");
		$post = $this->orm->posts->getById($id);
		if (!$post)
		{
			$post = new Post;
			$post->tagParser = $this->tagParser;
			$post->id = $id;
		}
		$post->message = $entry->message !== NULL ? $entry->message : ''; // can be NULL if caption only picture post is shared
		$this->out->writeln("Post message: $entry->message");
		$this->out->writeln("$post->message");
		$this->out->writeln("-");
		$post->createdTime = $entry->created_time;
		$post->updatedTime = $entry->updated_time ?: $entry->created_time;
		//$post->commentsCount; // TODO deprecate
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
		else if ($post->type === $post::TYPE_EVENT)
		{
		}

		$this->orm->posts->attach($post);

		$post->parent = $this->parseId($parentTopic->id);
		$post->group = $group->id;

		if (!$post->parent)
		{
			foreach ($post->getParsedTags()[0] as $tag)
			{
				$post->tags->add($this->orm->tags->getByNameOrCreate($tag));
			}
		}

		try
		{
			$this->orm->posts->persist($post);
		}
		catch (DuplicateEntryException $e)
		{
			// otherwise ignore, fb returned same post multiple times
		}
	}

}
