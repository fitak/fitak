<?php

namespace Fitak;

use Nextras\Orm;


class ContentsRepository extends Orm\Repository\Repository
{

	public static function getEntityClassNames()
	{
		return [
			EduxFile::class,
			EduxPage::class,
			FacebookComment::class,
			FacebookThread::class,
		];
	}

	public function getEntityClassName(array $data)
	{
		if (isset($data['type']) && class_exists($data['type']))
		{
			return $data['type'];
		}

		throw new InvalidStateException;
	}

}
