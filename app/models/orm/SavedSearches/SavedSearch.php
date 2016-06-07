<?php

namespace Fitak;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany;


/**
 * @property string             $query
 * @property string             $name
 *
 * @property ManyHasMany|User[] $users  {m:n UsersRepository $savedSearches}
 */
class SavedSearch extends Entity
{

}
