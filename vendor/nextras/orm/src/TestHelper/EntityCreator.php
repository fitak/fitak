<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\TestHelper;

use DateTime;
use Nextras\Orm\Entity\IEntity;
use Nextras\Orm\Entity\Reflection\PropertyMetadata;
use Nextras\Orm\Entity\Reflection\PropertyRelationshipMetadata;
use Nextras\Orm\Model\IModel;


class EntityCreator
{
	/** @var IModel */
	private $model;


	public function __construct(IModel $model)
	{
		$this->model = $model;
	}


	public function create($entity, array $params = [])
	{
		$entity = new $entity;
		$repository = $this->model->getRepositoryForEntity($entity);
		$repository->attach($entity);

		$this->fill($entity, $params);
		return $entity;
	}


	protected function fill(IEntity $entity, array $params)
	{
		foreach ($entity->getMetadata()->getProperties() as $property) {
			if ($property->isReadonly) {
				continue;
			}

			$key = $property->name;

			if (array_key_exists($key, $params)) {
				$value = $params[$key];
				unset($params[$key]);
			} elseif ($property->isNullable || $entity->hasValue($key)) {
				continue;
			} else {
				$value = $this->random($property);
			}

			$entity->{$key} = $value;
		}
	}


	protected function random(PropertyMetadata $property)
	{
		if ($property->relationship && in_array($property->relationship->type, [
				PropertyRelationshipMetadata::MANY_HAS_ONE,
				PropertyRelationshipMetadata::ONE_HAS_ONE,
				PropertyRelationshipMetadata::ONE_HAS_ONE_DIRECTED,
		])) {
			return $this->create($property->relationship->entity);
		}

		$possibilities = [];
		if ($property->enum) {
			$possibilities = $property->enum;

		} else {
			foreach (array_keys($property->types) as $type) {
				switch ($type) {
					case 'datetime':
						$possibilities[] = new DateTime($this->randomInt(2010, 2020) . '-' . $this->randomInt(1,
								12) . '-' . $this->randomInt(1, 31));
						break;
					case 'string':
						$possibilities[] = $this->randomWords(20, 50);
						break;
					case 'int':
						$possibilities[] = $this->randomInt(0, 100);
						break;
					case 'float':
						$possibilities[] = $this->randomInt(0, 100) + $this->randomInt(0, 100) / 100;
						break;
					case 'bool':
						$possibilities[] = (bool) $this->randomInt(0, 1);
						break;
				}
			}
		}

		if (!$possibilities) {
			return NULL;
		}

		return $possibilities[array_rand($possibilities)];
	}


	protected function randomInt($min, $max)
	{
		return rand($min, $max);
	}


	protected function randomWords($min, $max)
	{
		static $lipsumDictionary = NULL;
		if (!$lipsumDictionary) {
			$sentence = <<<XX
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor nunc vestibulum neque tristique
				hendrerit. Nulla lobortis viverra laoreet. Nullam dignissim velit tortor. Pellentesque habitant morbi
				tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas condimentum molestie nunc,
				non placerat sapien porta commodo. In hendrerit tellus ut ante congue mattis. Sed sed lacus vel lectus
				malesuada ornare. Duis eu mollis elit. Etiam dignissim sit amet lacus eget lobortis. Quisque facilisis
				tincidunt odio, sit amet pretium odio elementum et. Nam vestibulum metus nunc, tincidunt tempus nunc
				interdum eu. Nullam nisl nunc, dignissim id ligula eu, posuere interdum mauris.
XX;
			$lipsumDictionary = preg_split('#,?\.?\s+#', $sentence);
		}

		$word = '';
		while (strlen($word) < ($max - 3)) {
			if (strlen($word) > $min && $this->randomInt(0, 1)) {
				break;
			}

			$word .= $lipsumDictionary[array_rand($lipsumDictionary)] . ' ';
		}

		return ucfirst(substr(trim($word), 0, $max));
	}

}
