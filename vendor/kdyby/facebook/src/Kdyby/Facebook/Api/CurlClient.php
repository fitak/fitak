<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Kdyby\Facebook\Api;

use Kdyby\CurlCaBundle\CertificateHelper;
use Kdyby\Facebook;
use Nette;
use Nette\Diagnostics\Debugger;
use Nette\Http\UrlScript;
use Nette\Utils\Json;
use Nette\Utils\Strings;



if (!defined('CURLE_SSL_CACERT_BADFILE')) {
	define('CURLE_SSL_CACERT_BADFILE', 77);
}

/**
 * @author Filip Procházka <filip@prochazka.su>
 *
 * @method onRequest($url, $params)
 * @method onError(\Kdyby\Facebook\Exception $e, array $info)
 * @method onSuccess(array $result, array $info)
 */
class CurlClient extends Nette\Object implements Facebook\ApiClient
{

	/**
	 * Default options for curl.
	 * @var array
	 */
	public static $defaultCurlOptions = array(
		CURLOPT_CONNECTTIMEOUT => 10,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_HTTPHEADER => array(
			'User-Agent: kdyby-facebook-1.1',
		),
		CURLINFO_HEADER_OUT => TRUE,
		CURLOPT_HEADER => TRUE,
		CURLOPT_RETURNTRANSFER => TRUE,
	);

	/**
	 * Options for curl.
	 * @var array
	 */
	public $curlOptions = array();

	/**
	 * @var array of function($url, $params)
	 */
	public $onRequest = array();

	/**
	 * @var array of function(Facebook\Exception $e, array $info)
	 */
	public $onError = array();

	/**
	 * @var array of function(array $result, array $info)
	 */
	public $onSuccess = array();

	/**
	 * @var Facebook\Facebook
	 */
	private $fb;

	/**
	 * @var array
	 */
	private $cache = array();



	public function __construct()
	{
		$this->curlOptions = self::$defaultCurlOptions;
	}



	/**
	 * @param Facebook\Facebook $facebook
	 */
	public function setFacebook(Facebook\Facebook $facebook)
	{
		$this->fb = $facebook;
	}



	/**
	 * Invoke the old restserver.php endpoint.
	 *
	 * @param array $params Method call object
	 * @throws Facebook\FacebookApiException
	 * @return mixed The decoded response object
	 */
	public function restServer(array $params)
	{
		// generic application level parameters
		$params['api_key'] = $this->fb->config->appId;
		$params['format'] = 'json-strings';

		$result = $this->callOauth($this->fb->config->getApiUrl($params['method']), $params);

		$method = strtolower($params['method']);
		if ($method === 'auth.expiresession' || $method === 'auth.revokeauthorization') {
			$this->fb->destroySession();
		}

		return $result;
	}



	/**
	 * Invoke the Graph API.
	 *
	 * @param string $path The path (required)
	 * @param string $method The http method (default 'GET')
	 * @param array $params The query/post data
	 * @throws Facebook\FacebookApiException
	 * @return mixed The decoded response object
	 */
	public function graph($path, $method = NULL, array $params = array())
	{
		if (is_array($method) && empty($params)) {
			$params = $method;
			$method = NULL;
		}
		$params['method'] = $method ?: 'GET'; // method override as we always do a POST
		$domainKey = Facebook\Helpers::isVideoPost($path, $method) ? 'graph_video' : 'graph';

		return $this->callOauth($this->fb->config->createUrl($domainKey, $path), $params);
	}



	/**
	 * @param \Nette\Http\UrlScript $url
	 * @param $params
	 * @throws Facebook\FacebookApiException
	 * @return array|mixed
	 */
	protected function callOauth(UrlScript $url, $params)
	{
		try {
			$result = Json::decode($response = $this->oauth($url, $params), Json::FORCE_ARRAY);

		} catch (Nette\Utils\JsonException $e) {
			throw $this->resolveAPIException(array(
				'error_description' => $e->getMessage() . (isset($response) ? "\n\n" . $response : '')
			));
		}

		// results are returned, errors are thrown
		if (is_array($result) && (isset($result['error_code']) || isset($result['error']))) {
			throw $this->resolveAPIException($result);
		}

		return $result;
	}



	/**
	 * Make a OAuth Request.
	 *
	 * @param string $url The path (required)
	 * @param array $params The query/post data
	 *
	 * @return string The decoded response object
	 * @throws Facebook\FacebookApiException
	 */
	public function oauth($url, array $params)
	{
		if (!isset($params['access_token'])) {
			$params['access_token'] = $this->fb->getAccessToken();
		}

		if (isset($params['access_token']) && !isset($params['appsecret_proof'])) {
			$params['appsecret_proof'] = $this->fb->config->getAppSecretProof($params['access_token']);
		}

		// json_encode all params values that are not strings
		$params = array_map(function ($value) {
			if ($value instanceof UrlScript) {
				return (string)$value;

			} elseif ($value instanceof \CURLFile) {
				return $value;

			} elseif (is_bool($value)) {
				return $value ? '1' : '0';
			}

			return !is_string($value) ? Json::encode($value) : $value;
		}, $params);

		return $this->makeRequest($url, $params);
	}



	/**
	 * Makes an HTTP request. This method can be overridden by subclasses if
	 * developers want to do fancier things or use something other than curl to
	 * make the request.
	 *
	 * @param string $url The URL to make the request to
	 * @param array $params The parameters to use for the POST body
	 * @param resource $ch Initialized curl handle
	 *
	 * @throws Facebook\FacebookApiException
	 * @return string The response text
	 */
	protected function makeRequest($url, array $params, $ch = NULL)
	{
		if (isset($this->cache[$cacheKey = md5(serialize(array($url, $params)))])) {
			return $this->cache[$cacheKey];
		}

		$url = new UrlScript($url);
		$method = strtoupper(isset($params['method']) ? $params['method'] : 'GET');

		$this->onRequest((string)$url, $params);

		$ch = $ch ?: curl_init();

		$opts = $this->curlOptions;

		if ($this->fb->config->graphVersion !== '' && $this->fb->config->graphVersion !== 'v1.0') { // v2.0 or later
			unset($params['method']);

			if ($method === 'GET') {
				$url->appendQuery($params);
				$params = array();
			}

			if ($method === 'DELETE' || $method === 'PUT') {
				$opts[CURLOPT_CUSTOMREQUEST] = $method;
			}

			if ($method !== 'GET') {
				$opts[CURLOPT_POSTFIELDS] = $params;
			}

			$opts[CURLOPT_HTTPHEADER][] = 'Accept-Encoding: *';

		} else { // BC
			$opts[CURLOPT_POSTFIELDS] = $this->fb->config->fileUploadSupport ? $params : http_build_query($params, NULL, '&');

			// disable the 'Expect: 100-continue' behaviour. This causes CURL to wait
			// for 2 seconds if the server does not support this header.
			$opts[CURLOPT_HTTPHEADER][] = 'Expect:';
		}

		$opts[CURLOPT_URL] = (string) $url;

		// execute request
		curl_setopt_array($ch, $opts);
		$result = curl_exec($ch);

		// provide certificate if needed
		if (curl_errno($ch) == CURLE_SSL_CACERT || curl_errno($ch) === CURLE_SSL_CACERT_BADFILE) {
			Debugger::log('Invalid or no certificate authority found, using bundled information', 'facebook');
			$this->curlOptions[CURLOPT_CAINFO] = CertificateHelper::getCaInfoFile();
			curl_setopt($ch, CURLOPT_CAINFO, CertificateHelper::getCaInfoFile());
			$result = curl_exec($ch);
		}

		// With dual stacked DNS responses, it's possible for a server to
		// have IPv6 enabled but not have IPv6 connectivity.  If this is
		// the case, curl will try IPv4 first and if that fails, then it will
		// fall back to IPv6 and the error EHOSTUNREACH is returned by the
		// operating system.
		if ($result === FALSE && empty($opts[CURLOPT_IPRESOLVE])) {
			$matches = array();
			if (preg_match('/Failed to connect to ([^:].*): Network is unreachable/', curl_error($ch), $matches)) {
				if (strlen(@inet_pton($matches[1])) === 16) {
					Debugger::log('Invalid IPv6 configuration on server, Please disable or get native IPv6 on your server.', 'facebook');
					$this->curlOptions[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
					curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
					$result = curl_exec($ch);
				}
			}
		}

		$info = curl_getinfo($ch);
		if (isset($info['request_header'])) {
			list($info['request_header']) = self::parseHeaders($info['request_header']);
		}
		$info['method'] = $method;

		if ($result === FALSE) {
			$e = new Facebook\FacebookApiException(array(
				'error_code' => curl_errno($ch),
				'error' => array('message' => curl_error($ch), 'type' => 'CurlException')
			));
			curl_close($ch);
			$this->onError($e, $info);
			throw $e;
		}

		if (!$result && isset($info['redirect_url'])) {
			$result = Json::encode(array('url' => $info['redirect_url']));
		}

		$info['headers'] = self::parseHeaders(substr($result, 0, $info['header_size']));
		$result = trim(substr($result, $info['header_size']));

		$this->onSuccess($result, $info);
		curl_close($ch);
		return $this->cache[$cacheKey] = $result;
	}



	/**
	 * Analyzes the supplied result to see if it was thrown
	 * because the access token is no longer valid.  If that is
	 * the case, then we destroy the session.
	 *
	 * @param $result array A record storing the error message returned by a failed API call.
	 * @throws Facebook\FacebookApiException
	 */
	protected function resolveAPIException($result)
	{
		$e = new Facebook\FacebookApiException($result);
		switch ($e->getType()) {
			case 'OAuthException': // OAuth 2.0 Draft 00 style
			case 'invalid_token': // OAuth 2.0 Draft 10 style
			case 'Exception': // REST server errors are just Exceptions
				if ($this->apiErrorRequiresSessionDestroy($e->getMessage())) {
					$this->fb->destroySession();
				}
				break;
		}

		return $e;
	}



	/**
	 * @param string $message
	 * @return bool
	 */
	protected function apiErrorRequiresSessionDestroy($message)
	{
		return strpos($message, 'Error validating access token') !== FALSE
			|| strpos($message, 'Invalid OAuth access token') !== FALSE
			|| strpos($message, 'An active access token must be used') !== FALSE;
	}



	private static function parseHeaders($raw)
	{
		$headers = array();

		// Split the string on every "double" new line.
		foreach (explode("\r\n\r\n", $raw) as $index => $block) {

			// Loop of response headers. The "count() -1" is to
			//avoid an empty row for the extra line break before the body of the response.
			foreach (Strings::split(trim($block), '~[\r\n]+~') as $i => $line) {
				if (preg_match('~^([a-z-]+\\:)(.*)$~is', $line)) {
					list($key, $val) = explode(': ', $line, 2);
					$headers[$index][$key] = $val;

				} elseif (!empty($line)) {
					$headers[$index][] = $line;
				}
			}
		}

		return $headers;
	}

}
