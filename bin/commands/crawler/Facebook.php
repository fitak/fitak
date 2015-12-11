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
			50);
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
		$fb_id = $this->parseId($entry->id);
		$post = $this->orm->posts->getBy(["fb_id" => $fb_id]);
		if (!$post)
		{
			$post = new Post;
			$post->tagParser = $this->tagParser;
		}
		$post->fb_id = $fb_id;
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

		//This is for attachments in comments
		if ($entry->attachment)
		{
			if ($entry->attachment->type == "share")
			{
				$post->type = $post::TYPE_LINK;
			}
			elseif ($entry->attachment->type == "photo")
			{
				$post->type = $post::TYPE_PHOTO;
			}
			elseif ($entry->attachment->type == "video_share_youtube")
			{
				$post->type = $post::TYPE_VIDEO;
			}
			else
			{
				/* TODO there can be some other types
				 * In FB documentation there is no list of attachment
				 * types, because they tell that attachment is already
				 * deprecated and not used but it isn't.
				 * Due to this there could be some types which are not
				 * properly recognized, but because ORM checks the type
				 * of "type" field and it needs to be some value in enum,
				 * there is set the type "status".
				 * It is better to have no attachment than cause crawled
				 * stop. Maybe there should be some exception which log
				 * unrecognised types...
				 */
				$post->type = $post::TYPE_STATUS;
			}

			if ($post->type === $post::TYPE_PHOTO)
			{
				$post->link = $entry->attachment->url;
				$post->picture = $entry->attachment->media->image->src;
				if ($entry->attachment->title)
				{
					$post->description = $entry->attachment->title;
				}
			}
			elseif ($post->type === $post::TYPE_LINK)
			{
				$post->picture = $entry->attachment->media->image->src;
				$post->link = $entry->attachment->url;
				$post->description = $entry->attachment->description;
			}
			elseif ($post->type === $post::TYPE_VIDEO)
			{
				//TODO titles and descriptions are not properly defined
				$post->source = $entry->attachment->url;
				$post->description = $entry->attachment->title;
			}
		}

		$this->orm->posts->attach($post);
		$parentFbId = $this->parseId($parentTopic->id);
		$post->parent = $this->orm->posts->getBy(['fb_id' => $parentFbId]);
		$post->group = $group->id;


		if (!$post->parent)
		{
			$tags = array();
			foreach ($post->getParsedTags()[0] as $tag)
			{
				array_push($tags, $this->orm->tags->getByNameOrCreate($tag));
			}
			$post->tags->set($tags);
		}

		try
		{
			$this->orm->posts->persistAndFlush($post);
		}
		catch (DuplicateEntryException $e)
		{
			// otherwise ignore, fb returned same post multiple times
		}
	}

}
