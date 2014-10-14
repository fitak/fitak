<?php

namespace Fitak;

use DateTime;
use Nextras\Orm;
use Nextras\Orm\Relationships\ManyHasMany;
use Nextras\Orm\Relationships\ManyHasOne;
use Nextras\Orm\Relationships\OneHasMany;


/**
 * @property string   $type
 * @property string   $message
 * @property DateTime $createdTime
 * @property DateTime $updatedTime
 *
 * Only valid on FacebookContent:
 * @property NULL|Group    $group         {m:1 GroupsRepository $contents}
 * @property ManyHasMany|Tag[] $tags {m:n TagsRepository $contents primary}
 *
 * Only valid on FacebookThread:
 * @property OneHasMany|FacebookComment[] $comments    {1:m ContentsRepository $parent}
 *
 * Only valid on FacebookComment:
 * @property NULL|ManyHasOne|FacebookThread $parent {m:1 ContentsRepository $comments}
 */
abstract class Content extends Orm\Entity\Entity
{

	public function __construct()
	{
		parent::__construct();
		$this->type = get_class($this);
	}

}
