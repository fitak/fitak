<?php

namespace Fitak;

use Nextras\Orm\Mapper\Mapper;
use Nextras\Orm\Mapper\Dbal;

class NewsMapper extends Mapper
{

	public function findRecent()
	{
		return $this->connection->query('
			SELECT *
			FROM `news`
			WHERE NOW() < `created` + INTERVAL 2 WEEK
			ORDER BY `created` DESC
		');
	}

}
