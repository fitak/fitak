<?php

namespace Fitak;

use Nextras\Orm;


class TagsRepository extends Orm\Repository\Repository
{

	public function findTrending()
	{
		return $this->mapper->findTrending();
	}

}
