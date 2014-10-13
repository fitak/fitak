<?php

namespace Fitak;

use Nextras\Orm;
use Nextras\Orm\Relationships\ManyHasMany;


/**
 * @property string             $name
 * @property-read int           $count  {default 0}
 *
 * @property ManyHasMany|Post[] $posts  {m:n PostsRepository $tags}
 * @property ManyHasMany|User[] $favoredBy {m:n UsersRepository $favoriteTags}
 */
class Tag extends Orm\Entity\Entity
{

}
