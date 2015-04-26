<?php

namespace Fitak;

use Nextras\Orm;


/**
 * @method User getByEmail(string $email)
 * @method User getByFacebookId(string $id)
 */
class UsersRepository extends Orm\Repository\Repository
{

}
