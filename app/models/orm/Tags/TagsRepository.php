<?php

namespace Fitak;

use Nextras\Orm;


/**
 * @method Tag getByName(string $name)
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
