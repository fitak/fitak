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
		$this->addOption('flushLimit', NULL, InputOption::VALUE_OPTIONAL,
			'After how many persists posts should be flushed to DB (default 50)',
			50);
		$this->addOption('exit', NULL, InputOption::VALUE_NONE,
			'If set, crawler exits after DB flush (debugging option)');
	}

	/**
	 * Helper function for printing to Symfony console
	 *
	 * It's not fully functional - it has only two levels:
	 * normal - when no verbose level is set
	 * verbose - when it set some level of verbosity (-v|-vv|-vvv)
	 *
	 * @param string $message   given string for printing
	 * @param string $level     possible values:
	 *                          "always" - it is printed in every setting
	 *                          "normal" - it is printed only when no verbose settings is set
	 *                          "verbose" - it is printed when -v or higher level is set
	 *                          default "always"
	 * @param int    $newLine   values:
	 *                          0 - no newline after print
	 *                          otherwise print newline
	 *                          default: 1
	 */
	private function consolePrint($message, $level = "always", $newLine = 1)
	{
		// normal
		if ($this->out->getVerbosity() === 1 && $level === "normal")
		{
			$this->out->write($message, $newLine);
		}

		// verbose
		elseif ($this->out->getVerbosity() >= 2 && $level === "verbose")
		{
			$this->out->write($message, $newLine);
		}

		elseif ($level === "always")
		{
			$this->out->write($message, $newLine);
		}

		// other possibilities not implemented - this is just very quick tool
		return;
	}

	/**
	 * Helper function for printing formatted posts/comments/replies
	 *
	 * It takes basic information (id, updated time and message) and prints
	 * it in some pretty formatting
	 *
	 * @param $id             id which is parsed for printing
	 * @param $time           time which is formatted to pretty format
	 * @param $message        message which is truncated
	 * @param $type           type of data:
	 *                        "p" post
	 *                        "c" comment
	 *                        "r" reply
	 * @param $level          resending level of verbosity to consolePrint
	 */
	private function consolePrintFormatted($id, $time, $message, $type, $level)
	{
		$id = $this->parseId($id);

		$time = date("Y-m-d H:i", strtotime($time));

		$message = mb_substr($message, 0, 70, "utf-8") . "...";
		$message = str_replace("\n", " ", $message);

		$typeChar = "";
		if ($type === "c")
		{
			$typeChar = "  ";
		}
		elseif ($type === "r")
		{
			$typeChar = "    ";
		}

		$this->consolePrint("$typeChar<comment>$id ($time)</comment> $message", $level);

		return;
	}

	private function parseId($longId)
	{
		return preg_replace('~^\d+_~', '', $longId);
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
	 * @param FbCrawler       $fb
	 * @param \StdClass       $group
	 * @param KeyValueStorage $kvs
	 */
	private function indexGroup(FbCrawler $fb, $group, KeyValueStorage $kvs)
	{
		//number of posts to persist before flush to DB
		$flushLimit = $this->in->getOption('flushLimit') - 1;
		$this->consolePrint("<info>Processing '$group->name'</info>");

		$timestamp = time();
		$key = $kvs::CRAWLER_SINCE . '.' . $group->id;
		$since = $kvs->get($key);

		$flushCounter = 0;
		foreach ($fb->getGroupFeedSince($group->id, $since) as $post)
		{
			$this->consolePrint("p", "normal", 0);
			$this->consolePrintFormatted($post->id, $post->created_time, $post->message, "p", "verbose");
			$this->indexEntry($group, $post, NULL);

			foreach ($fb->getComments($post) as $comment)
			{
				$this->consolePrint("c", "normal", 0);
				$this->consolePrintFormatted($comment->id, $comment->created_time, $comment->message, "c", "verbose");
				$this->indexEntry($group, $comment, $post);
				foreach ($fb->getComments($comment) as $reply)
				{
					$this->consolePrint("r", "normal", 0);
					$this->consolePrintFormatted($reply->id, $reply->created_time, $reply->message, "r", "verbose");
					$this->indexEntry($group, $reply, $comment);
				}
			}
			if (++ $flushCounter > $flushLimit)
			{
				$this->consolePrint("|<question>-></question>", "normal", 0);
				$this->consolePrint("<question>/// FLUSH ///</question>", "verbose");
				$this->orm->flush();
				$flushCounter = 0;

				//exit after flush (for debugging purposes)
				if ($this->in->getOption('exit'))
				{
					exit();
				}
			}

			$this->consolePrint("|", "normal", 0);
			$this->consolePrint("------", "verbose");
		}

		// We are saving timestamp from before the crawl so
		// on next iteration we might get some duplicates but
		// we will never lose any posts if crawler is stopped
		$kvs->save($key, $timestamp);
		$this->orm->flush();
	}

	/**
	 * @param \StdClass      $group
	 * @param \StdClass      $entry
	 * @param NULL|\StdClass $parentTopic
	 */
	protected function indexEntry($group, $entry, $parentTopic = NULL)
	{
		$fb_id = $this->parseId($entry->id);
		$post = $this->orm->posts->getBy(["fb_id" => $fb_id]);
		if (!$post)
		{
			$post = new Post;
			$post->tagParser = $this->tagParser;
		}
		$post->fb_id = $fb_id;
		$post->message = $entry->message !== NULL ? $entry->message : ''; // can be NULL if caption only picture post is shared
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
			$this->orm->posts->persist($post);
		}
		catch (DuplicateEntryException $e)
		{
			// otherwise ignore, fb returned same post multiple times
		}
	}

}
