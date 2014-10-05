<?php

namespace Fitak;

use Nextras\Orm;


/**
 * @property-read GroupsRepository $groups
 * @property-read NewsRepository $news
 * @property-read PostsRepository $posts
 * @property-read TagsRepository $tags
 * @property-read UsersRepository $users
 */
class RepositoryContainer extends Orm\Model\DIModel
{

}
