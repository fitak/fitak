<?php

class TemplateHelpers extends Nette\Object
{

	/** @var Tags */
	private $tagsModel;

	/** @var \Nextras\Application\LinkFactory */
	private $linkFactory;

	/**
	 * @var Highlighter
	 */
	private $highlighter;

	public function __construct(Nextras\Application\LinkFactory $linkFactory, Tags $tagsModel, Highlighter $highlighter)
	{
		$this->tagsModel = $tagsModel;
		$this->linkFactory = $linkFactory;
		$this->highlighter = $highlighter;
	}

	public function loader($name, $a = NULL, $b = NULL, $c = NULL)
	{
		if (method_exists($this, $name))
		{
			return $this->$name($a, $b, $c);
		}
	}

	public function highlight($input, $highlight)
	{
		if (!$highlight)
		{
			return $input;
		}

		return $this->highlighter->processHighlight($highlight);
	}

	public function tagsToLinks($item)
	{
		$tags = $this->tagsModel->extractTags($item);

		if ($tags)
		{
			foreach ($tags[0] as $index => $tag)
			{
				$url = $this->linkFactory->link('Search:default', ['s' => 'tag:' . $tag]);
				$item = str_replace('[' . $tags[1][$index] . ']', "<a href=\"$url\"><span class=\"label label-info\">$tag</span></a> ", $item);
			}
		}

		return $item;
	}

	public function urlsToLinks($input)
	{
		// define an url regular exression pattern:
		$urlPattern = '/(https?:\/\/|www.)(www.)?([-a-z0-9]*[a-z0-9]\.)(\bcom\b|\bbiz\b|\bgov\b|\bmil\b|\bnet\b|\borg\  b|[a-z][a-z]|[a-z][a-z]\.[a-z][a-z])\/?([a-zA-Z0-9]*)?([a-zA-Z0-9_\-\.\?=\/&%#!;~\+]*)?/';
		// get all matches
		preg_match_all($urlPattern, $input, $temp);
		$temp = $temp[0]; // an array of all urls

		$urlTag = [];
		foreach ($temp as &$url)
		{
			$urlShort = str_replace("http://", "", $url);
			while (strlen($urlShort) > 35)
			{ // limit is set to 35
				if (is_bool(strpos($urlShort, "/")))
				{ // are there any natural places to cut the link?
					$urlShort = substr($urlShort, 0, 30);
				}
				else
				{ // find a good place to cut the link
					$newLength = max(strrpos($urlShort, "/"), strrpos($urlShort, "?"), strrpos($urlShort, "#"));
					$urlShort = substr($urlShort, 0, $newLength);
				}
				$urlShort = $urlShort . "...";
			}
			$urlTag[] = "<a href=\"$url\" title=\"$url\">$urlShort</a>";
		}
		if (0 < sizeof($temp))
		{
			// if there are any urls in the text, replace them with the new code
			return strtr($input, array_combine($temp, $urlTag));
		}
		else
		{
			return $input;
		}
	}

}
