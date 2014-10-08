<?php


/**
 * Search request structure.
 *
 * @author Jan Tvrdík
 * @property string|int $timeLimit
 */
class SearchRequest extends Nette\Object
{

	/** @var string|NULL search query */
	public $query;

	/** @var string|NULL author name */
	public $from;

	/** @var array list of tags (# => tags) */
	public $tags;

	/** @var array|NULL list of groups (# => groupId) in which to search, NULL means search in all groups */
	public $groups;

	/** @var int timestamp */
	protected $since;

	/**
	 * @return int timestamp
	 */
	public function getSince()
	{
		return $this->since;
	}

	/**
	 * @param string|int $limit
	 */
	public function setTimeLimit($limit)
	{
		if ($limit === SearchForm::SEMESTER)
		{
			$today = date('md');
			if ('0213' > $today)
			{
				// winter semester after new years eve
				$this->since = mktime(0, 0, 0, 9, 22, date('Y') - 1);
			}
			else if ('0922' <= $today)
			{
				// winter semester
				$this->since = mktime(0, 0, 0, 9, 22, date('Y'));
			}
			else
			{
				// summer semester
				$this->since = mktime(0, 0, 0, 2, 13);
			}
		}
		else if ($limit)
		{
			$this->since = (int) time() - $limit;
		}
	}

}
