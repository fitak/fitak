<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\Bridges\NetteDI;

use Nette\DI\Container;
use Nextras\Orm\Repository\IDependencyProvider;
use Nextras\Orm\Entity\IEntity;


class DependencyProvider implements IDependencyProvider
{
	/** @var Container */
	private $container;


	public function __construct(Container $container)
	{
		$this->container = $container;
	}


	public function injectDependencies(IEntity $entity)
	{
		$this->container->callInjects($entity);
		return $entity;
	}

}
