<?php

namespace Fitak;

use Nextras\Orm;
use Nextras\Orm\Relationships\OneHasMany;


/**
 * @property string            $id
 * @property string            $name
 * @property bool              $closed {default 0}
 *
 * @property OneHasMany|Content[] $contents  {1:m ContentsRepository $group}
 */
class Group extends Orm\Entity\Entity
{

}
