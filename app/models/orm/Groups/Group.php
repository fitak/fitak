<?php

namespace Fitak;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;


/**
 * @property string            $id
 * @property string            $name
 * @property bool              $closed {default 0}
 *
 * @property OneHasMany|Post[] $posts  {1:m PostsRepository $group}
 */
class Group extends Entity
{

}
