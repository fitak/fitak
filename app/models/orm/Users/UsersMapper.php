<?php

namespace Fitak;

use Nette\Database\Drivers\MySqlDriver;
use Nextras\Orm;
use Nextras\Orm\Entity\IEntity;


class UsersMapper extends Orm\Mapper\Mapper
{

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
