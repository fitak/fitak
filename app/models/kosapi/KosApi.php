<?php

namespace Fitak;

use Nette;
use Nette\Utils\Strings;
use SimpleXMLElement;


class KosApi extends Nette\Object
{

	/** https://kosapi.fit.cvut.cz/projects/kosapi/wiki/SemesterFilter */
	const SEMESTER_CURRENT = 'current';
	const SEMESTER_NEXT = 'next';
	const SEMESTER_PREV = 'prev';

	/** @var string */
	private $username;

	/** @var string */
	private $password;

	/**
	 * @param string $username username used to access KOS API
	 * @param string $password password used to access KOS API
	 */
	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	/**
	 * Sends request to KOS API and returns parsed XML response.
	 *
	 * @param  string $path e.g. '/students/:username'
	 * @param  array  $params
	 * @return SimpleXMLElement
	 * @throws IOException
	 */
	public function sendRequest($path, array $params = [])
	{
		$url = $this->buildUrl('https://kosapi.fit.cvut.cz/api/3' . $path, $params);
		$curl = curl_init($url);
		curl_setopt_array($curl, [
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_USERAGENT => 'Fitak.cz',
			CURLOPT_CAINFO => \Kdyby\CurlCaBundle\CertificateHelper::getCaInfoFile(),
			CURLOPT_HTTPHEADER => [
				'Accept: application/atom+xml',
				'Authorization: Basic ' . base64_encode($this->username . ':' . $this->password),
			],
		]);
		$response = curl_exec($curl);
		if ($response === FALSE)
		{
			throw new IOException(curl_error($curl), curl_errno($curl));
		}

		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		if ($httpCode !== 200)
		{
			throw new HttpException($url, $httpCode);
		}

		$xml = @simplexml_load_string($response);
		if ($xml === FALSE)
		{
			throw new IOException();
		}

		return $xml;
	}

	/**
	 * Returns resource code or id from element pointing to them with 'xlink:href' attribute,
	 * e.g. <course xlink:href="courses/BI-LIN/">BI-LIN</course>.
	 *
	 * @param  SimpleXMLElement $el
	 * @return string
	 */
	public function getResourceCode(SimpleXMLElement $el)
	{
		$href = $this->getHrefAttr($el);
		$href = trim($href, '/');
		$code = substr($href, strrpos($href, '/') + 1);

		return $code;
	}

	/**
	 * Returns content of 'xlink:href' attribute.
	 *
	 * @param  SimpleXMLElement $el
	 * @return string
	 */
	public function getHrefAttr(SimpleXMLElement $el)
	{
		return (string) $el->attributes('http://www.w3.org/1999/xlink')->href;
	}

	/**
	 * Expands placeholders (:name) in URL and appends query string from remaining parameters.
	 *
	 * @param  string $url e.g. '//example.com/:foo/bar'
	 * @param  array  $params
	 * @return string
	 */
	private function buildUrl($url, array $params = [])
	{
		$url = Strings::replace($url, '#:([\w-]+)#', function ($matches) use (&$params)
		{
			$name = $matches[1];
			$value = $params[$name];
			unset($params[$name]);
			return $value;
		});

		$query = http_build_query($params);
		return $url . ($query ? '?' . $query : '');
	}

}
