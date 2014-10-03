<?php

namespace Fitak;

use Nette\Database\ResultSet;
use Nextras\Orm;


class TagsMapper extends Orm\Mapper\Mapper
{

	/**
	 * Finds most popular tags in recent 14 days.
	 *
	 * @return array
	 */
	public function findTrending()
	{
		return $this->databaseContext->query('
			SELECT tags.name, COUNT(tags.id) AS count
			FROM data
			INNER JOIN data_tags
				ON data.id = data_tags.data_id
			INNER JOIN tags
				ON data_tags.tags_id = tags.id
			WHERE data.created_time > DATE_SUB(NOW(), INTERVAL 2 WEEK)
			GROUP BY tags.id
			ORDER BY count DESC
			LIMIT 25
		')->fetchAll();
	}

}
