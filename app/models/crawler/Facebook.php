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
	 * @param string $appId
	 * @param string $appSecret
	 * @param string[] $scope
	 * @param Session $session
	 */
	public function __construct($appId, $appSecret, $scope, Session $session)
	{
		FacebookSession::setDefaultApplication($appId, $appSecret);
		$this->login = new FacebookRedirectLoginHelper('http://copy.this.url/');
		$this->scope = $scope;

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

		$req = new FacebookRequest($this->fbs, 'GET', '/me/groups');
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

		$req = new FacebookRequest($this->fbs, 'GET', "/$groupId/feed?since=$since");
		do {
			$res = $req->execute();

			/** @var \StdClass $raw */
			$raw = $res->getResponse();
			foreach ($raw->data as $entry)
			{
				yield $entry;
			}

			/** @var FacebookResponse $res */
			$req = $res->getRequestForNextPage();
		} while ($req);
	}

}
