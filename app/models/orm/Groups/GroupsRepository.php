<?php

namespace Fitak;

use Nextras\Orm\Collection\ICollection;
use Nextras\Orm\Repository\Repository;


class GroupsRepository extends Repository
{

	/**
	 * @return ICollection
	 */
	public function findAllSorted()
	{
		return $this->findAll()->orderBy('name');
	}

	/**
	 * @return array (id => name)
	 */
	public function findList()
	{
		return $this->findAllSorted()->fetchPairs('id', 'name');
	}

}
