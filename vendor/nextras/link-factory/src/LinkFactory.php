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

	/** @var Nette\Http\UrlScript */
	private $refUrl;

	/** @var string */
	private $refUrlHost;


	public function __construct(Nette\Application\IRouter $router, Nette\Http\IRequest $httpRequest)
	{
		$this->router = $router;
		$this->refUrl = $httpRequest->getUrl();
		$this->refUrlHost = $this->refUrl->getHostUrl();
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
	 * @throws InvalidLinkException if router returns NULL
	 */
	public function link($destination, array $params = array())
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

		$pos = strrpos($destination, ':');
		$presenter = substr($destination, 0, $pos);
		if ($pos + 1 < strlen($destination)) {
			$params['action'] = substr($destination, $pos + 1);
		}

		$request = new Nette\Application\Request($presenter, 'GET', $params);
		$url = $this->router->constructUrl($request, $this->refUrl);
		if ($url === NULL) {
			throw new InvalidLinkException("Router failed to create link to '$destination'.");
		}

		if (!$absoluteUrl && strncmp($url, $this->refUrlHost, strlen($this->refUrlHost)) === 0) {
			$url = substr($url, strlen($this->refUrlHost));
		}

		if ($fragment) {
			$url .= $fragment;
		}

		return $url;
	}

}

class InvalidLinkException extends \LogicException
{

}
