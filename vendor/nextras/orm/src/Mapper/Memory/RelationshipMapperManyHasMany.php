<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\Mapper\Memory;

use Nette\Object;
use Nextras\Orm\Collection\EntityIterator;
use Nextras\Orm\Collection\ICollection;
use Nextras\Orm\Entity\IEntity;
use Nextras\Orm\Entity\Reflection\PropertyMetadata;
use Nextras\Orm\Mapper\IRelationshipMapperManyHasMany;


/**
 * ManyHasMany relationship mapper for memory mapping.
 */
class RelationshipMapperManyHasMany extends Object implements IRelationshipMapperManyHasMany
{
	/** @var PropertyMetadata */
	protected $metadata;

	/** @var ArrayMapper */
	protected $mapper;


	public function __construct(PropertyMetadata $metadata, ArrayMapper $mapper)
	{
		$this->metadata = $metadata;
		$this->mapper = $mapper;
	}


	public function getIterator(IEntity $parent, ICollection $collection)
	{
		if ($this->metadata->relationship->isMain) {
			$relationshipData = $this->mapper->getRelationshipDataStorage($this->metadata->name);
			$ids = isset($relationshipData[$parent->id]) ? array_keys($relationshipData[$parent->id]) : [];
		} else {
			$ids = [];
			$parentId = $parent->id;
			$relationshipData = $this->mapper->getRelationshipDataStorage($this->metadata->relationship->property);
			foreach ($relationshipData as $id => $parentIds) {
				if (isset($parentIds[$parentId])) {
					$ids[] = $id;
				}
			}
		}

		$data = $collection->findBy(['id' => $ids])->fetchAll();
		return new EntityIterator($data);
	}


	public function getIteratorCount(IEntity $parent, ICollection $collection)
	{
		return count($this->getIterator($parent, $collection));
	}


	public function add(IEntity $parent, array $add)
	{
		$id = $parent->id;
		$data = & $this->mapper->getRelationshipDataStorage($this->metadata->name);
		foreach ($add as $addId) {
			$data[$id][$addId] = TRUE;
		}
	}


	public function remove(IEntity $parent, array $remove)
	{
		$id = $parent->id;
		$data = & $this->mapper->getRelationshipDataStorage($this->metadata->name);
		foreach ($remove as $removeId) {
			unset($data[$id][$removeId]);
		}
	}

}
