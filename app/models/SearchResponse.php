<?php

use Nette\Object;


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
		return isset($this->highlights[$row['id']])
			? $this->highlights[$row['id']]
			: $this->tagParser->separateMessage($row->message)[1];
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

}
