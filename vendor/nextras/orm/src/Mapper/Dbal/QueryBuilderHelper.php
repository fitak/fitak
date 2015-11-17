<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\Mapper\Dbal;

use Nette\Object;
use Nextras\Dbal\QueryBuilder\QueryBuilder;
use Nextras\Orm\Collection\Helpers\ConditionParserHelper;
use Nextras\Orm\Collection\ICollection;
use Nextras\Orm\Entity\IEntity;
use Nextras\Orm\Entity\Reflection\PropertyRelationshipMetadata as Relationship;
use Nextras\Orm\LogicException;
use Nextras\Orm\Model\IModel;
use Nextras\Orm\Model\MetadataStorage;
use Nextras\Orm\InvalidArgumentException;
use Traversable;


/**
 * QueryBuilderHelper for Nextras\Dbal.
 */
class QueryBuilderHelper extends Object
{
	/** @var IModel */
	private $model;

	/** @var DbalMapper */
	private $mapper;

	/** @var MetadataStorage */
	private $metadataStorage;


	public function __construct(IModel $model, DbalMapper $mapper)
	{
		$this->model = $model;
		$this->mapper = $mapper;
		$this->metadataStorage = $model->getMetadataStorage();
	}


	/**
	 * Transforms orm condition and adds it to QueryBuilder.
	 * @param  string       $expression
	 * @param  mixed        $value
	 * @param  QueryBuilder $builder
	 * @param  bool         $distinctNeeded
	 */
	public function processWhereExpression($expression, $value, QueryBuilder $builder, & $distinctNeeded)
	{
		list($chain, $operator, $sourceEntity) = ConditionParserHelper::parseCondition($expression);

		if ($value instanceof Traversable) {
			$value = iterator_to_array($value);
		} elseif ($value instanceof IEntity) {
			$value = $value->getValue('id');
		}

		if (is_array($value) && count($value) === 0) {
			$builder->andWhere($operator === ConditionParserHelper::OPERATOR_EQUAL ? '1=0' : '1=1');
			return;
		}

		$sqlExpresssion = $this->normalizeAndAddJoins($chain, $sourceEntity, $builder, $distinctNeeded, $value);
		$operator = $this->getSqlOperator($value, $operator);

		$builder->andWhere($sqlExpresssion . $operator . '%any', $value);
	}


	/**
	 * Transforms orm order by expression and adds it to QueryBuilder.
	 * @param  string       $expression
	 * @param  string       $direction
	 * @param  QueryBuilder $builder
	 */
	public function processOrderByExpression($expression, $direction, QueryBuilder $builder)
	{
		list($chain, , $sourceEntity) = ConditionParserHelper::parseCondition($expression);
		$sqlExpression = $this->normalizeAndAddJoins($chain, $sourceEntity, $builder, $distinctNeeded);
		$builder->addOrderBy($sqlExpression . ($direction === ICollection::DESC ? ' DESC' : ''));

		if ($distinctNeeded) {
			throw new LogicException("Cannot order by '$expression' expression, includes has many relationship.");
		}
	}


	private function normalizeAndAddJoins(array $levels, $sourceEntity, QueryBuilder $builder, & $distinctNeeded = FALSE, & $value = NULL)
	{
		$column = array_pop($levels);
		$sourceMapper = $this->mapper;
		$sourceAlias = $builder->getFromAlias();
		$sourceReflection = $sourceMapper->getStorageReflection();
		$sourceEntityMeta = $this->metadataStorage->get($sourceEntity ?: $sourceMapper->getRepository()->getEntityClassNames()[0]);

		foreach ($levels as $levelIndex => $level) {
			$property = $sourceEntityMeta->getProperty($level);
			if ($property->relationship === NULL) {
				throw new InvalidArgumentException("Entity {$sourceEntityMeta->className}::\${$level} does not contain a relationship.");
			}

			$targetMapper = $this->model->getRepository($property->relationship->repository)->getMapper();
			$targetReflection = $targetMapper->getStorageReflection();
			$targetEntityMetadata = $this->metadataStorage->get($property->relationship->entity);

			$relType = $property->relationship->type;
			if ($relType === Relationship::ONE_HAS_MANY || ($relType === Relationship::ONE_HAS_ONE_DIRECTED && !$property->relationship->isMain)) {
				$targetColumn = $targetReflection->convertEntityToStorageKey($property->relationship->property);
				$sourceColumn = $sourceReflection->getStoragePrimaryKey()[0];
				$distinctNeeded = $relType === Relationship::ONE_HAS_MANY;

			} elseif ($relType === Relationship::MANY_HAS_MANY) {
				if ($property->relationship->isMain) {
					list($joinTable, list($inColumn, $outColumn)) = $sourceMapper->getManyHasManyParameters($property, $targetMapper);
				} else {
					$sourceProperty = $targetEntityMetadata->getProperty($property->relationship->property);
					list($joinTable, list($outColumn, $inColumn)) = $targetMapper->getManyHasManyParameters($sourceProperty, $sourceMapper);
				}

				$sourceColumn = $sourceReflection->getStoragePrimaryKey()[0];

				$builder->leftJoin(
					$sourceAlias,
					$joinTable,
					self::getAlias($joinTable),
					"[$sourceAlias.$sourceColumn] = [$joinTable.$inColumn]"
				);

				$sourceAlias = $joinTable;
				$sourceColumn = $outColumn;
				$targetColumn = $targetReflection->getStoragePrimaryKey()[0];
				$distinctNeeded = TRUE;

			} else {
				$targetColumn = $targetReflection->getStoragePrimaryKey()[0];
				$sourceColumn = $sourceReflection->convertEntityToStorageKey($level);
			}

			$targetTable = $targetMapper->getTableName();
			$targetAlias = $level . str_repeat('_', $levelIndex);

			$builder->leftJoin(
				$sourceAlias,
				$targetTable,
				$targetAlias,
				"[$sourceAlias.$sourceColumn] = [$targetAlias.$targetColumn]"
			);

			$sourceAlias = $targetAlias;
			$sourceMapper = $targetMapper;
			$sourceReflection = $targetReflection;
			$sourceEntityMeta = $targetEntityMetadata;
		}

		$sourceEntityMeta->getProperty($column); // check if property exists
		if ($column === 'id' && count($sourceEntityMeta->getPrimaryKey()) > 1) {
			$pair = [];
			foreach ($sourceEntityMeta->getPrimaryKey() as $column) {
				$column = $sourceReflection->convertEntityToStorageKey($column);
				$pair[] = "[{$sourceAlias}.{$column}]";
			}
			if (!isset($value[0][0])) {
				$value = [$value];
			}
			return '(' . implode(', ', $pair) . ')';

		} else {
			$column = $sourceReflection->convertEntityToStorageKey($column);
			return "[{$sourceAlias}.{$column}]";
		}
	}


	public static function getAlias($name)
	{
		static $counter = 1;
		if (preg_match('#^([a-z0-9_]+\.){0,2}+([a-z0-9_]+?)$#i', $name, $m)) {
			return $m[2];
		}

		return '_join' . $counter++;
	}


	/**
	 * @param  mixed  $value
	 * @param  string $operator
	 * @return string
	 */
	protected function getSqlOperator($value, $operator)
	{
		if ($operator === ConditionParserHelper::OPERATOR_EQUAL) {
			if (is_array($value)) {
				$operator = ' IN ';
				return $operator;
			} elseif ($value === NULL) {
				$operator = ' IS ';
				return $operator;
			} else {
				$operator = ' = ';
				return $operator;
			}

		} elseif ($operator === ConditionParserHelper::OPERATOR_NOT_EQUAL) {
			if (is_array($value)) {
				$operator = ' NOT IN ';
				return $operator;
			} elseif ($value === NULL) {
				$operator = ' IS NOT ';
				return $operator;
			} else {
				$operator = ' != ';
				return $operator;
			}

		} else {
			$operator = " $operator ";
			return $operator;
		}
	}

}
