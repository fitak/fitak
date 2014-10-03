<?php

namespace Nextras\Application;

use Nette;


/**
 * A simple link factory.
 */
class LinkFactory extends Nette\Object
{

	/** @var Nette\Application\IRouter */
	private $router;

	/** @var Nette\Http\IRequest */
	private $httpRequest;


	public function __construct(Nette\Application\IRouter $router, Nette\Http\IRequest $httpRequest)
	{
		$this->router = $router;
		$this->httpRequest = $httpRequest;
	}


	/**
	 * Creates link.
	 *
	 * Destination syntax:
	 *  - 'Presenter:action' - creates relative link
	 *  - '//Presenter:action' - creates absolute link
	 *  - 'Presenter:action#fragment' - may contain optional fragment
	 *
	 * @param  string 'Presenter:action' (creates relative link) or '//Presenter:action' (creates absolute link)
	 * @param  array
	 * @return string
	 */
	public function link($destination, array $params = [])
	{
		if (($pos = strrpos($destination, '#')) !== FALSE) {
			$fragment = substr($destination, $pos);
			$destination = substr($destination, 0, $pos);
		} else {
			$fragment = '';
		}

		if (strncmp($destination, '//', 2) === 0) {
			$absoluteUrl = TRUE;
			$destination = substr($destination, 2);
		} else {
			$absoluteUrl = FALSE;
		}

		list($presenter, $action) = explode(':', $destination);
		$params['action'] = $action;
		$request = new Nette\Application\Request($presenter, 'GET', $params);
		$refUrl = $this->httpRequest->getUrl();
		$url = $this->router->constructUrl($request, $refUrl);

		if (!$absoluteUrl) {
			$hostUrl = $refUrl->getHostUrl();
			if (strncmp($url, $hostUrl, strlen($hostUrl)) === 0) {
				$url = substr($url, strlen($hostUrl));
			}
		}

		return $url . $fragment;
	}

}
