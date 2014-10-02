<?php

class Highlighter
{

	protected static $normalize;
	protected static $tags;

	public function __construct()
	{
		if (!self::$normalize)
		{
			self::$normalize = self::buildRegex();
			self::$tags = self::buildTagsRegex();
		}
	}

	/**
	 * 1/ Replaces elasticsearch markup with html markup.
	 *
	 * 2/ Partial tag highlights highlight whole tag.
	 * For example "[BI->PA1<]" translates to "[BI-PA1]", without highlight.
	 *
	 * 3/ Default elasticsearch highlighter does not highlight
	 * stop words and separates by white space.
	 * String ">foo< stopword >bar<" with >< denoting highlights,
	 * will be converted to ">foo stopword bar<".
	 *
	 * @param string $input unsafe html
	 * @return string safe html
	 */
	public function processHighlight($input)
	{
		$input = preg_replace(self::$normalize, '$1', $input);
		$input = preg_replace(self::$tags, '[$1$3$5]', $input);
		$input = htmlentities($input, ENT_NOQUOTES);
		$input = str_replace(ElasticSearch::HIGHLIGHT_START, '<span class="highlight">', $input);
		$input = str_replace(ElasticSearch::HIGHLIGHT_END, '</span>', $input);

		return $input;
	}

	private static function buildRegex()
	{
		$words = ['']; // empty word to merge immediate tokens
		foreach (ElasticSearch::getStopwords() as $word)
		{
			$words[] = preg_quote($word, '~');
		}
		return '~' .
			preg_quote(ElasticSearch::HIGHLIGHT_END, '~') .
			'(\W*\s*(' . implode('|', $words) . ')\s*\W*)' .
			preg_quote(ElasticSearch::HIGHLIGHT_START, '~') .
			'~';
	}

	private static function buildTagsRegex()
	{
		return '~\\[([^\\[]{0,10})' .
			'(' . preg_quote(ElasticSearch::HIGHLIGHT_START, '~') . ')' .
			'([^\\]]{1,15})' .
			'(' . preg_quote(ElasticSearch::HIGHLIGHT_END, '~') . ')' .
			'([^\\]]){0,10}\\]~';
	}

}
