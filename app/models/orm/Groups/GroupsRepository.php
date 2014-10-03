<?php

namespace Fitak;

use Nextras\Orm;
use Nextras\Orm\Entity\Collection\ICollection;


class GroupsRepository extends Orm\Repository\Repository
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
