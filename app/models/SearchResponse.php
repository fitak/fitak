<?php

use Nette\Object;
use Nette\Utils\Strings;


class SearchResponse extends Object implements IteratorAggregate
{

	/**
	 * @var array
	 */
	protected $topics;

	/**
	 * @var array
	 */
	protected $highlights;

	/**
	 * @var int
	 */
	private $total;

	/**
	 * @var Tags
	 */
	private $tagParser;

	/**
	 * @param array $topics
	 * @param array $highlights
	 * @param int $total
	 * @param Tags $tagParser
	 */
	public function __construct($topics, array $highlights, $total, Tags $tagParser)
	{
		$this->topics = array_values($topics);
		$this->highlights = $highlights;
		$this->total = $total;
		$this->tagParser = $tagParser;
	}

	/**
	 * @return array
	 */
	public function getTopics()
	{
		return $this->topics;
	}

	/**
	 * @return array
	 */
	public function getHighlights()
	{
		return $this->highlights;
	}

	public function getHighlight($row)
	{
		$msg = isset($this->highlights[$row['id']])
			? $this->highlights[$row['id']]
			: $this->tagParser->separateMessage($row->message)[1];

		if (is_array($msg))
		{
			foreach ($msg as &$part)
			{
				$part = $this->fixDiacritics($part);
				$part = $this->removeWhitespace($part);
			}
			$msg = implode(' ... ', $msg);
		}
		$msg = $this->fixInwordHighlights($msg);

		return Strings::trim($msg);
	}

	/**
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * @return ArrayIterator|Traversable
	 */
	public function getIterator()
	{
		return new \ArrayIterator($this->topics);
	}

	private function fixDiacritics($part)
	{
		$map = [
			['a', '´', 'á'],
			['e', '´', 'é'],
			['i', '´', 'í'],
			['ı', '´', 'í'],
			['´', 'ı', 'í'],
			['o', '´', 'ó'],
			['u', '´', 'ú'],
			['u', '˚', 'ů'],
			['y', '´', 'ý'],
			['c', 'ˇ', 'č'],
			['d', 'ˇ', 'ď'],
			['e', 'ˇ', 'ě'],
			['n', 'ˇ', 'ň'],
			['r', 'ˇ', 'ř'],
			['s', 'ˇ', 'š'],
			['t', 'ˇ', 'ť'],
			['z', 'ˇ', 'ž'],
		];

		$start = preg_quote(ElasticSearch::HIGHLIGHT_START, '~');
		$end = preg_quote(ElasticSearch::HIGHLIGHT_END, '~');
		foreach ($map as list($a, $b, $c))
		{
			$part = Strings::replace($part, "~$a($start|$end)?$b~i", "$c\\1");
		}
		return $part;
	}

	/**
	 * Transforms >lexik<ální to >lexikální<
	 * @param $msg
	 * @return string
	 */
	private function fixInwordHighlights($msg)
	{
		$start = preg_quote(ElasticSearch::HIGHLIGHT_START, '~');
		$msg = Strings::replace($msg, "~\b([\pL]+)$start([\pL]+)\b~ius", '\\1\\2' . ElasticSearch::HIGHLIGHT_START);
		$end = preg_quote(ElasticSearch::HIGHLIGHT_END, '~');
		return Strings::replace($msg, "~\b([\pL]+)$end([\pL]+)\b~ius", '\\1\\2' . ElasticSearch::HIGHLIGHT_END);
	}

	private function removeWhitespace($part)
	{
		return Strings::replace($part, '~\s{2,}~s', "\n");
	}

}
