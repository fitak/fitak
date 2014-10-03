<?php

namespace Fitak;

use Nextras\Orm;
use Nextras\Orm\Relationships\ManyHasMany;


/**
 * @property string             $name
 * @property int                $count
 *
 * @property ManyHasMany|Post[] $posts  {m:n PostsRepository $tags}
 */
class Tag extends Orm\Entity\Entity
{

}
