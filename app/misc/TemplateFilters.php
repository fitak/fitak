<?php

namespace Fitak;

use Latte;
use Highlighter;
use Nette;
use Nette\Utils\Strings;


class TemplateFilters extends Nette\Object
{

	/** @var Highlighter */
	private $highlighter;

	public function __construct(Highlighter $highlighter)
	{
		$this->highlighter = $highlighter;
	}

	public function register(Latte\Engine $latte)
	{
		foreach (get_class_methods($this) as $method)
		{
			if ($method === __METHOD__) continue;
			$latte->addFilter($method, [$this, $method]);
		}
	}

	public function highlight($highlight)
	{
		return $this->highlighter->processHighlight($highlight);
	}

	/**
	 * Based on Nette\Utils\Validators::isUrl in Nette (http://nette.org)
	 * Licensed under New BSD License (https://github.com/nette/utils/blob/v2.2.2/license.md)
	 * Copyright (c) 2004 David Grudl (http://davidgrudl.com)
	 */
	public function urlsToLinks($input)
	{
		$alpha = "a-z\x80-\xFF";
		$domain = "[0-9$alpha](?:[-0-9$alpha]{0,61}[0-9$alpha])?";
		$topDomain = "[$alpha](?:[-0-9$alpha]{0,17}[$alpha])?";
		$pattern = "(^https?://(?:(?:$domain\\.)*$topDomain|\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}|\\[[0-9a-f:]{3,39}\\])(:\\d{1,5})?(/\\S*)?\\z)i";

		return Strings::replace($input, $pattern, function ($matches) {
			$url = $matches[0];
			$text = $this->getTextualUrl($url);
			return "<a href=\"$url\" title=\"$url\">$text</a>";
		});
	}

	/**
	 * Based on TexyLinkModule::textualUrl in Texy! (http://texy.info).
	 * Licensed under New BSD License (https://github.com/dg/texy/blob/v2.6/license.txt)
	 * Copyright (c) 2004 David Grudl (http://davidgrudl.com)
	 */
	private function getTextualUrl($url)
	{
		// parse_url() in PHP damages UTF-8 - use regular expression
		if (!preg_match('~^(?:(?P<scheme>[a-z]+):)?(?://(?P<host>[^/?#]+))?(?P<path>(?:/|^)(?!/)[^?#]*)?(?:\?(?P<query>[^#]*))?(?:#(?P<fragment>.*))?()$~', $url, $parts))
		{
			return $url;
		}

		$res = '';
		if ($parts['host'] !== '')
		{
			$res .= $parts['host'];
		}

		if ($parts['path'] !== '')
		{
			$res .= (iconv_strlen($parts['path'], 'UTF-8') > 16 ? ("/\xe2\x80\xa6" . iconv_substr($parts['path'], -12, 12, 'UTF-8')) : $parts['path']);
		}

		if ($parts['query'] !== '')
		{
			$res .= iconv_strlen($parts['query'], 'UTF-8') > 4 ? "?\xe2\x80\xa6" : ('?' . $parts['query']);
		}
		elseif ($parts['fragment'] !== '')
		{
			$res .= iconv_strlen($parts['fragment'], 'UTF-8') > 4 ? "#\xe2\x80\xa6" : ('#' . $parts['fragment']);
		}

		return $res;
	}

}
