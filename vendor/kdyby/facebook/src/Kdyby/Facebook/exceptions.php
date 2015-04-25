<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Kdyby\Facebook;


/**
 * Common interface for caching facebook exceptions
 *
 * @author Filip Procházka <email@filip-prochazka.com>
 */
interface Exception
{

}


/**
 * Thrown when an API call returns an exception.
 *
 * @author Naitik Shah <naitik@facebook.com>
 */
class FacebookApiException extends \Exception implements Exception
{

	/**
	 * The result from the API server that represents the exception information.
	 */
	protected $result;



	/**
	 * Make a new API Exception with the given result.
	 *
	 * @param array $result The result from the API server
	 */
	public function __construct($result)
	{
		$this->result = $result;

		$code = 0;
		if (isset($result['error_code']) && is_int($result['error_code'])) {
			$code = $result['error_code'];
		}

		if (isset($result['error_description'])) {
			$msg = $result['error_description']; // OAuth 2.0 Draft 10 style

		} elseif (isset($result['error']) && is_array($result['error'])) {
			$msg = $result['error']['message']; // OAuth 2.0 Draft 00 style
			$code = isset($result['error']['code']) ? $result['error']['code'] : $code;

			if (is_array($this->result)) {
				$this->result['error_code'] = $code;
			}

		} elseif (isset($result['error_msg'])) {
			$msg = $result['error_msg']; // Rest server style

		} else {
			$msg = 'Unknown Error. Check getResult()';
		}

		parent::__construct($msg, (int) $code);
	}



	/**
	 * Return the associated result object returned by the API server.
	 *
	 * @return array The result from the API server
	 */
	public function getResult()
	{
		return $this->result;
	}



	/**
	 * Returns the associated type for the error. This will default to
	 * 'Exception' when a type is not available.
	 *
	 * @return string
	 */
	public function getType()
	{
		if (isset($this->result['error'])) {
			if (is_string($error = $this->result['error'])) {
				return $error; // OAuth 2.0 Draft 10 style

			} elseif (is_array($error)) {
				if (isset($error['type'])) {
					return $error['type']; // OAuth 2.0 Draft 00 style
				}
			}
		}

		return 'Exception';
	}



	/**
	 * To make debugging easier.
	 *
	 * @return string The string representation of the error
	 */
	public function __toString()
	{
		$str = $this->getType() . ': ';
		if ($this->code > 0) {
			$str .= $this->code . ': ';
		}
		return $str . $this->message;
	}

}



/**
 * @author Filip Procházka <email@filip-prochazka.com>
 */
class InvalidArgumentException extends \InvalidArgumentException implements Exception
{

}
