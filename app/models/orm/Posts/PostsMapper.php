<?php

namespace Fitak;

use Nette\Database\Drivers\MySqlDriver;
use Nextras\Orm;
use Nextras\Orm\Entity\IEntity;
use Nextras\Orm\Mapper\IMapper;


class PostsMapper extends Orm\Mapper\Mapper
{

	/** @var string */
	protected $tableName = 'data';

	protected function createStorageReflection()
	{
		$storageReflection = parent::createStorageReflection();
		$storageReflection->addMapping('commentsCount', 'comments');
		$storageReflection->addMapping('likesCount', 'likes');

		return $storageReflection;
	}

	public function getManyHasManyParameters(IMapper $mapper)
	{
		if ($mapper instanceof TagsMapper)
		{
			return [
				'data_tags',
				['data_id', 'tags_id'],
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
