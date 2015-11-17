<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\TestHelper;


trait TestCaseEntityTrait
{

	protected function e($entityClass, array $parameters = [])
	{
		return $this->container->getByType('Nextras\Orm\TestHelper\EntityCreator')->create($entityClass, $parameters);
	}

}
