<?php


/**
 * Search request structure.
 *
 * @author Jan Tvrdík
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
	public $since;

}
