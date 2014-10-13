<?php

namespace Fitak;

use Nette\Database\Drivers\MySqlDriver;
use Nextras\Orm;
use Nextras\Orm\Entity\IEntity;
use Nextras\Orm\Mapper\IMapper;


class UsersMapper extends Orm\Mapper\Mapper
{

	public function getManyHasManyParameters(IMapper $mapper)
	{
		if ($mapper instanceof TagsMapper)
		{
			return [
				'tags_favorite',
				['user_id', 'tag_id'],
			];
		}
		else
		{
			return parent::getManyHasManyParameters($mapper);
		}
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
