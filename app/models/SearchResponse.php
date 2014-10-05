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
	 * @param array $topics
	 * @param array $highlights
	 * @param int $total
	 */
	public function __construct($topics, array $highlights, $total)
	{
		$this->topics = array_values($topics);
		$this->highlights = $highlights;
		$this->total = $total;
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
			: NULL;
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
