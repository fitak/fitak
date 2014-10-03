<?php
use Nette\Utils\Random;
use Tracy\Debugger;

/**
 * Here is everything about getting data from Facebook...
 *
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
class CrawlerPresenter extends BasePresenter
{

	private $gid, $token, $nextPage, $insertedCount = 0, $updatedCount = 0, $downloadedCount = 0;
	private $facebook;

	// getting data (topics, comments and likes) from Facebook groups
	public function actionDefault()
	{
		@set_time_limit(600);
		$this->token = $this->context->token->getToken();
		if (!$this->token)
		{
			$this->redirect('Crawler:token');
		}

		$config = [];
		$config['appId'] = $this->context->token->getAppId();
		$config['secret'] = $this->context->token->getAppSecret();
		$this->facebook = new Facebook($config);
		$this->facebook->setAccessToken($this->token);

		foreach ($this->orm->groups->findAll() as $group)
		{
			$this->gid = $group->id;
			$this->nextPage = NULL;
			echo "<h2>Checking group: $group->name </h2>";
			$this->startGrabbing();
			$this->insertedCount = $this->updatedCount = $this->downloadedCount = 0;
		}
		$this->terminate();
	}

	// getting token from Facebook
	public function actionToken($state, $code)
	{
		$tokenManager = $this->context->token;
		$ip = $this->getHttpRequest()->getRemoteAddress();

		if (!$tokenManager->checkAccess($ip))
		{
			echo "Oh sorry man, this is a private party!";
			mail($tokenManager->getEmail(), 'Notice', 'The token is maybe invalid!');
			$this->error(NULL, 403);
		}

		$session = $this->session->getSection('crawler.token');
		if ($code === NULL)
		{
			$session->state = Random::generate();
			$this->redirectUrl('https://www.facebook.com/dialog/oauth?' . http_build_query([
				'client_id' => $tokenManager->getAppId(),
				'redirect_uri' => $this->link('//Crawler:token'),
				'scope' => $tokenManager->getAppPermissions(),
				'state' => $session->state,
			]));
		}

		if (empty($session->state) || $session->state !== $state)
		{
			echo "The state does not match. You may be a victim of CSRF.";
			$this->error(NULL, 403);
		}

		$response = file_get_contents('https://graph.facebook.com/oauth/access_token?' . http_build_query([
			'client_id' => $tokenManager->getAppId(),
			'client_secret' => $tokenManager->getAppSecret(),
			'redirect_uri' => $this->link('//Crawler:token'),
			'code' => $code,
		]));

		$params = NULL;
		parse_str($response, $params);

		$date = new DateTime();
		$date->add(new DateInterval('PT' . $params['expires'] . 'S'));
		$tokenManager->saveToken($params['access_token'], $date);

		echo "Thanks for your token :)";
		$this->terminate();
	}

	private function startGrabbing()
	{
		while ($this->grabPage())
		{
			echo "Inserted: " . $this->insertedCount . " | Updated: " . $this->updatedCount . "<br />";
			//@ob_flush();
			//@flush();
		}
	}

	// proccess one block of JSON code (25 messages from feed)
	private function grabPage()
	{
		$data = $this->getJson();


		if (!$this->nextPage)
		{
			echo "The last page";
			return FALSE;
		}

		foreach ($data['data'] as $post)
		{
			// fix timezone issue
			$timezone = new DateTimeZone('Europe/Prague');
			$post['created_time'] = (new DateTime($post['created_time']))->setTimezone($timezone);
			$post['updated_time'] = (new DateTime($post['updated_time']))->setTimezone($timezone);

			list($groupId, $postId) = explode('_', $post['id']);
			$postUpdatedAt = $this->context->data->getUpdatedTime($postId);
			if ($postUpdatedAt == $post['updated_time'])
			{
				echo $this->insertedCount . ' messages was saved and ' . $this->updatedCount . ' updated.<br />';
				return FALSE;
			}

			$mess = "";

			$link = NULL;
			$source = NULL;
			$picture = NULL;
			$name = NULL;
			$caption = NULL;
			$description = NULL;

			if (isSet($post['message']))
			{
				$mess = $post['message'];
			}

			$commentsNum = 0;
			if (isSet ($post['comments']))
			{
				$commentsNum = count($post['comments']);
			}

			if (isSet ($post['link']))
			{
				$link = $post['link'];
			}

			if (isSet ($post['source']))
			{
				$source = $post['source'];
			}

			if (isSet ($post['picture']))
			{
				$picture = $post['picture'];
			}

			if (isSet ($post['name']))
			{
				$name = $post['name'];
			}

			if (isSet ($post['caption']))
			{
				$caption = $post['caption'];
			}

			if (isSet ($post['description']))
			{
				$description = $post['description'];
			}

			if (!$postUpdatedAt)
			{
				$post = new Fitak\Post();
				$post->id = $postId;
				$post->group = $this->gid;
				$post->message = $mess;
				$post->createdTime = $post['created_time'];
				$post->updatedTime = $post['updated_time'];
				$post->commentsCount = $commentsNum;
				$post->likesCount = 0;
				$post->fromId = $post['from']['id'];
				$post->fromName = $post['from']['name'];
				$post->type = $post['type'];
				$post->link = $link;
				$post->source = $source;
				$post->picture = $picture;
				$post->name = $name;
				$post->caption = $caption;
				$post->description = $description;
				$this->orm->posts->persistAndFlush($post); // todo: flush all posts at once

				$this->saveTags($mess, $postId);
				$this->insertedCount++;

			}
			else
			{
				/** @var Fitak\Post $post */
				$post = $this->orm->posts->getById($postId);
				$post->message = $mess;
				$post->updatedTime = $post['updated_time'];
				$post->commentsCount = $commentsNum;
				$this->orm->posts->persistAndFlush($post); // todo: flush all posts at once
				$this->updatedCount++;
			}

			if (isSet($post['comments']['data']) && count($post['comments']['data']))
			{
				$this->addComments($post['comments']['data'], $postId);

				$next = FALSE;
				if (isSet($post['comments']['paging']['next']))
				{
					$next = $post['comments']['paging']['next'];
				}

				while ($next)
				{
					$url = $next . '&access_token=' . $this->token;
					$extraComments = json_decode(file_get_contents($url), TRUE);
					$next = FALSE;
					if (isSet($extraComments['data']))
					{
						$this->addComments($extraComments['data'], $postId);
						if (isSet($extraComments['paging']['previous']))
						{
							$next = $extraComments['paging']['previous'];
						}
					}
				}
			}
		}

		return TRUE;
	}

	// save comments
	private function addComments($comments, $topicId)
	{
		foreach ($comments as $comment)
		{
			// fix timezone issue
			$comment['created_time'] = date(DATE_ISO8601, strtotime($comment['created_time']));
			$mess = "";
			if (isSet($comment['message']))
			{
				$mess = $comment['message'];
			}
			$likes_count = 0;

			/** @var Fitak\Post $comment */
			$comment = $this->orm->posts->getById($comment['id']);
			if ($comment && $comment->parent == $topicId)
			{
				$comment->message = $mess;
				$comment->likesCount = $likes_count;
				$this->orm->posts->persistAndFlush($comment); // todo: flush all posts at once

				$this->updatedCount++;
			}
			else
			{
				$comment = new Fitak\Post();
				$comment->id = $comment['id'];
				$comment->group = $this->gid;
				$comment->parent = $topicId;
				$comment->message = $mess;
				$comment->createdTime = $comment['created_time'];
				$comment->likesCount = $likes_count;
				$comment->fromId = $comment['from']['id'];
				$comment->fromName = $comment['from']['name'];
				$this->orm->posts->persistAndFlush($comment); // todo: flush all posts at once

				$this->insertedCount++;
			}
		}
	}

	// get another json with group feed
	private function getJson($cnt_attempts = 0)
	{
		if (!$this->nextPage || $this->nextPage == "")
		{
			$query = "/" . $this->gid . "/feed";
		}
		else
		{
			$query = str_replace('https://graph.facebook.com', '', $this->nextPage);
		}

		// trying download next json, it is possible to make 5 attempts per one query
		try
		{
			$result = $this->facebook->api($query);
		}
		catch (Exception $e)
		{
			echo "$cnt_attempts attempt per query ($query).";
			if ($cnt_attempts > 5)
			{
				echo "5 attempts per query ($query) are exhausted. Stopping whole script.";
				Debugger::log("$e on query: $query");
				$this->terminate();
			}
			echo 'Caught exception: ', $e->getMessage(), " ... repeating query ($query)\n";

			return $this->getJson(++$cnt_attempts);
		}

		if (isSet($result['paging']['next']))
		{
			$this->nextPage = $result['paging']['next'];
		}
		else
		{
			$this->nextPage = NULL;
		}

		$this->downloadedCount++;

		return $result;
	}

	// there are tags in messages like [tag], we wanna save them apart
	private function saveTags($message, $message_id)
	{
		$tags = $this->context->tags->extractTags($message);
		if (!$tags)
		{
			return;
		}
		foreach ($tags[0] as $tag)
		{
			$this->context->tags->saveTag($tag, $message_id);
		}
	}

}
