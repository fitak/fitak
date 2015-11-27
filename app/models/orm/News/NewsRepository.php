<?php

namespace Fitak;

use Nextras\Orm\Collection\ICollection;
use Nextras\Orm\Repository\Repository;


class NewsRepository extends Repository
{
	public function findRecent()
	{
		$newsInterval = new \DateTime('-2 week');
		return $this->findAll()
			->findBy(['this->created>=' => $newsInterval])
			->orderBy('created', ICollection::DESC);
	}
}
