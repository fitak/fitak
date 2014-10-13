<?php

namespace Fitak;

use Nextras\Orm;
use Nextras\Orm\Entity\Collection\ICollection;


/**
 * @method Tag getByName(string $name)
 * @method ICollection findByName(array $names)
 * @property-read TagsMapper $mapper
 */
class TagsRepository extends Orm\Repository\Repository
{

	public function findTrending()
	{
		return $this->mapper->findTrending();
	}

	/**
	 * @param  string $name
	 * @return Tag
	 */
	public function getByNameOrCreate($name)
	{
		$tag = $this->getByName($name);
		if (!$tag)
		{
			try
			{
				$tag = new Tag();
				$tag->name = $name;
				$this->persistAndFlush($tag);
			}
			catch (DuplicateEntryException $e)
			{
				$tag = $this->getByName($name);
				if (!$tag) throw new \RuntimeException();
			}
		}

		return $tag;
	}

}
