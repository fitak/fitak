<?php

namespace Fitak;

use Nextras\Orm;


/**
 * @property-read ContentsRepository $contents
 * @property-read GroupsRepository $groups
 * @property-read NewsRepository $news
 * @property-read TagsRepository $tags
 * @property-read UsersRepository $users
 */
class RepositoryContainer extends Orm\Model\DIModel
{

}
