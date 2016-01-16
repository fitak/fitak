<?php

namespace Fitak;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasOne;


/**
 * @property bool              $isDownvote
 *
 * @property ManyHasOne|Post[] $data  {m:1 PostsRepository $votes} {primary}
 * @property ManyHasOne|User[] $user  {m:1 UsersRepository $votes} {primary}
 */
class Vote extends Entity
{
}
