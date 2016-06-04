<?php

namespace Fitak;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany;


/**
 * @property string             $query
 *
 * @property ManyHasMany|User[] $userSaved  {m:n UsersRepository $savedSearches}
 */
class SavedSearch extends Entity
{

}
