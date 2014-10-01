<?php

use Nette\Object;


class SearchResponse extends Object implements Iterator
{

	/**
	 * @var array
	 */
	protected $topics;

	/**
	 * @var array
	 */
	protected $highlights;

	private $key = 0;

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
	 * Return the current element
	 *
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 */
	public function current()
	{
		return $this->topics[$this->key];
	}

	/**
	 * Move forward to next element
	 *
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 */
	public function next()
	{
		$this->key++;
	}

	/**
	 * Return the key of the current element
	 *
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return mixed scalar on success, or null on failure.
	 */
	public function key()
	{
		return $this->key;
	}

	/**
	 * Checks if current position is valid
	 *
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 * Returns true on success or false on failure.
	 */
	public function valid()
	{
		return isset($this->topics[$this->key]);
	}

	/**
	 * Rewind the Iterator to the first element
	 *
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 */
	public function rewind()
	{
		$this->key = 0;
	}

	/**
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}

}
