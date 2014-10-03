<?php

namespace Fitak;

use Nextras\Orm;


class NewsMapper extends Orm\Mapper\Mapper
{

	public function findRecent()
	{
		return $this->databaseContext->query('
			SELECT *
			FROM `news`
			WHERE NOW() < `created` + INTERVAL 2 WEEK
			ORDER BY `created` DESC
		');
	}

}
