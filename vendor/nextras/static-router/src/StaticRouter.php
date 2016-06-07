<?php

namespace Nextras\Routing;

use Nette;
use Nette\Application\IRouter;
use Nette\Application\Request as AppRequest;
use Nette\Http\IRequest as HttpRequest;
use Nette\Http\Url;


/**
 * Simple static router.
 */
class StaticRouter extends Nette\Object implements IRouter
{
	/** @var array (Presenter:action => slug) */
	private $tableOut;

	/** @var int */
	private $flags;

	/** @var Url|NULL */
	private $lastRefUrl;

	/** @var string */
	private $lastBaseUrl;


	/**
	 * @param array $routingTable Presenter:action => slug
	 * @param int   $flags        IRouter::ONE_WAY, IRouter::SECURED
	 */
	public function __construct(array $routingTable, $flags = 0)
	{
		$this->tableOut = $routingTable;
		$this->flags = $flags;
	}


	/**
	 * Maps HTTP request to a Request object.
	 *
	 * @return AppRequest|NULL
	 */
	public function match(HttpRequest $httpRequest)
	{
		$url = $httpRequest->getUrl();
		$slug = rtrim(substr($url->getPath(), strrpos($url->getScriptPath(), '/') + 1), '/');
		foreach ($this->tableOut as $destination2 => $slug2) {
			if ($slug === rtrim($slug2, '/')) {
				$destination = $destination2;
				break;
			}
		}

		if (!isset($destination)) {
			return NULL;
		}

		$params = $httpRequest->getQuery();
		$pos = strrpos($destination, ':');
		$presenter = substr($destination, 0, $pos);
		$params['action'] = substr($destination, $pos + 1);

		return new AppRequest(
			$presenter,
			$httpRequest->getMethod(),
			$params,
			$httpRequest->getPost(),
			$httpRequest->getFiles(),
			array(AppRequest::SECURED => $httpRequest->isSecured())
		);
	}


	/**
	 * Constructs absolute URL from Request object.
	 *
	 * @return string|NULL
	 */
	public function constructUrl(AppRequest $appRequest, Url $refUrl)
	{
		if ($this->flags & self::ONE_WAY) {
			return NULL;
		}

		$params = $appRequest->getParameters();
		if (!isset($params['action']) || !is_string($params['action'])) {
			return NULL;
		}

		$key = $appRequest->getPresenterName() . ':' . $params['action'];
		if (!isset($this->tableOut[$key])) {
			return NULL;
		}

		if ($this->lastRefUrl !== $refUrl) {
			$scheme = ($this->flags & self::SECURED ? 'https' : 'http');
			$this->lastBaseUrl = $scheme . '://' . $refUrl->getAuthority() . $refUrl->getBasePath();
			$this->lastRefUrl = $refUrl;
		}

		unset($params['action']);
		$slug = $this->tableOut[$key];
		$query = (($tmp = http_build_query($params)) ? '?' . $tmp : '');
		$url = $this->lastBaseUrl . $slug . $query;

		return $url;
	}

}
