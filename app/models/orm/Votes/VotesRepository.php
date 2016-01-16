<?php

namespace Fitak;

use Nextras\Orm\Repository\Repository;

/**
 */
class VotesRepository extends Repository
{

	public function getByIds($postId, $userId)
	{
		return $this->getBy(['data' => $postId, 'user' => $userId]);
	}
}
