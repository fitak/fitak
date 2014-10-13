<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Kdyby\CurlCaBundle;



class CertificateHelper
{

	public static function setCurlCaInfo($resource)
	{
		if (!is_resource($resource) || get_resource_type($resource) !== 'curl') {
			throw new \InvalidArgumentException("Invalid resource given, expected resource of type curl.");
		}

		curl_setopt($resource, CURLOPT_CAINFO, self::getCaInfoFile());
	}



	public static function getCaInfoFile()
	{
		return __DIR__ . '/ca-bundle.crt';
	}

}
