<?php

namespace Fitak;

use Nextras\Orm;
use Nextras\Orm\Relationships\ManyHasMany;


/**
 * @property string             $name
 * @property-read int           $count  {default 0}
 *
 * @property ManyHasMany|Post[] $posts  {m:n PostsRepository $tags}
 */
class Tag extends Orm\Entity\Entity
{

}
