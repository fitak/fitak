<?php

namespace Fitak\Crawler;

use Facebook\Entities\AccessToken;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;
use Facebook\FacebookResponse;
use Facebook\FacebookSession;
use Facebook\GraphObject;
use Nette\Http\Session;


class Facebook
{

	/**
	 * @var FacebookSession
	 */
	protected $fbs;

	/**
	 * @var FacebookRedirectLoginHelper
	 */
	protected $login;

	/**
	 * @var string[]
	 */
	private $scope;

	/**
	 * @var string graph api prefix
	 */
	private $graphVersion;

	/**
	 *
	 * @param string   $appId
	 * @param string   $appSecret
	 * @param string[] $scope
	 * @param string   $graphVersion
	 * @param Session  $session
	 *
	 * @throws \Exception
	 */
	public function __construct($appId, $appSecret, $scope, $graphVersion, Session $session)
	{
		FacebookSession::setDefaultApplication($appId, $appSecret);
		$this->login = new FacebookRedirectLoginHelper('http://copy.this.url/');
		$this->scope = $scope;
		$this->graphVersion = $graphVersion;

		$session->start();
	}

	public function getLoginUrl()
	{
		return $this->login->getLoginUrl($this->scope);
	}

	/**
	 * @param string $url
	 * @return AccessToken
	 */
	public function getAccessTokenFromUrl($url)
	{
		$raw = parse_url($url, PHP_URL_QUERY);
		$query = [];
		parse_str($raw, $query);

		// Huge hack but this allows us to delegate
		// login logic to Facebook library
		foreach ($query as $key => $val)
		{
			$_GET[$key] = $val;
		}

		$session = $this->login->getSessionFromRedirect();
		return $session->getAccessToken();
	}

	public function setSession($accessToken)
	{
		$this->fbs = new FacebookSession($accessToken);
	}

	/**
	 * TODO deprecate hardcoded groups in favor of dynamically
	 * looking up what groups is authenticated user member of
	 *
	 * @throws FacebookRequestException
	 * @return mixed
	 */
	public function getGroups()
	{
		if (!$this->fbs)
		{
			throw new \ImplementationException('Call setSession prior to calling ' . __METHOD__);
		}

		$req = new FacebookRequest($this->fbs, 'GET', '/me/groups', NULL, $this->graphVersion);
		/** @var \StdClass $res */
		$res = $req->execute()->getResponse();
		return $res->data;
	}

	/**
	 * @param mixed $groupId
	 * @param int $since timestamp
	 * @throws FacebookRequestException
	 * @return GraphObject
	 */
	public function getGroupFeedSince($groupId, $since)
	{
		if (!$this->fbs)
		{
			throw new \ImplementationException('Call setSession prior to calling ' . __METHOD__);
		}
		$fields = "id,message,created_time,updated_time,from,caption,type," .
			"picture,link,description,source," .
			"comments{comments{message,created_time,from,attachment}," .
			"message,created_time,from,attachment}";
		$req = new FacebookRequest($this->fbs, 'GET', "/$groupId/feed?since=$since&fields=$fields", NULL, $this->graphVersion);
		do
		{
			$res = $req->execute();

			/** @var \StdClass $raw */
			$raw = $res->getResponse();
			foreach ($raw->data as $entry)
			{
				yield $entry;
			}

			/** @var FacebookResponse $res */
			$req = $res->getRequestForNextPage();
		}
		while ($req);
	}

	/**
	 * @param \StdClass $post
	 * @throws FacebookRequestException
	 * @return \StdClass[]
	 */
	public function getComments($post)
	{
		if (!isset($post->comments))
		{
			return;
		}

		foreach ($post->comments->data as $comment)
		{
			yield $comment;
		}

		$res = new FacebookResponse(new FacebookRequest($this->fbs, 'GET', "/$post->id/comments", NULL, $this->graphVersion), $post->comments, NULL);
		$req = $res->getRequestForNextPage();

		while ($req)
		{
			$res = $req->execute();

			/** @var \StdClass $raw */
			$raw = $res->getResponse();
			foreach ($raw->data as $entry)
			{
				yield $entry;
			}

			$req = $res->getRequestForNextPage();
		}
	}

}
