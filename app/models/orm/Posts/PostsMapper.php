<?php

namespace Fitak;

use Nextras\Orm;
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

}
