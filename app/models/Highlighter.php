<?php


class Highlighter
{

	protected static $normalize;

	public function __construct()
	{
		if (!self::$normalize)
		{
			self::$normalize = self::buildRegex();
		}
	}

	/**
	 * 1/ Replaces elasticsearch markup with html markup.
	 *
	 * 2/ Default elasticsearch highlighter does not highlight
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

}
