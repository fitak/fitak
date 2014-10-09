<?php

namespace Fitak;

use DateTime;
use Nextras\Orm;


/**
 * @property string      $email
 * @property string      $passwordHash
 * @property string|NULL $signUpTokenHash
 * @property DateTime    $signUpTime
 * @property string|NULL $passwordResetTokenHash
 *
 * @property-read bool   $isActivated {virtual} only activated users can sign in
 */
class User extends Orm\Entity\Entity
{

	public function getIsActivated()
	{
		return $this->signUpTokenHash === NULL;
	}

}
