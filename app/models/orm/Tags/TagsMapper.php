<?php

namespace Fitak;

use Nette\Database\Drivers\MySqlDriver;
use Nextras\Orm\Mapper\Mapper;
use Nextras\Orm\Entity\IEntity;


class TagsMapper extends Mapper
{

	/**
	 * Finds most popular tags in recent 14 days.
	 *
	 * @return array
	 */
	public function findTrending()
	{
		$row =  $this->connection->query('
			SELECT tags.name, COUNT(tags.id) AS count
			FROM data
			INNER JOIN data_tags
				ON data.id = data_tags.data_id
			INNER JOIN tags
				ON data_tags.tags_id = tags.id
			WHERE data.created_time > DATE_SUB(NOW(), INTERVAL 1 MONTH)
			GROUP BY tags.id
			ORDER BY count DESC
			LIMIT 25
		')->fetchAll();
		return $row;
	}

	public function persist(IEntity $entity)
	{
		try
		{
			return parent::persist($entity);
		}
		catch (\PDOException $e)
		{
			if ($e->errorInfo[1] === MySqlDriver::ERROR_DUPLICATE_ENTRY)
			{
				throw new DuplicateEntryException($e->errorInfo[2], 0, $e);
			}
			else
			{
				throw $e;
			}
		}
	}

}
