<?php

namespace Fitak;

use DateTime;
use Nette\Utils\Strings;
use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany;


/**
 * @property string            $email
 * @property string|NULL       $facebookId
 * @property string|NULL       $facebookAccessToken
 * @property string            $passwordHash
 * @property string|NULL       $firstName
 * @property string|NULL       $lastName
 * @property string|NULL       $signUpTokenHash
 * @property DateTime          $signUpTime
 * @property string|NULL       $passwordResetTokenHash
 * @property ManyHasMany|Tag[] $favoriteTags        {m:n TagsRepository $favoredBy primary}
 *
 * @property-read bool         $isActivated {virtual} only activated users can sign in
 */
class User extends Entity
{

	protected function getterIsActivated()
	{
		return $this->signUpTokenHash === NULL;
	}

	/**
	 * @return string|FALSE
	 */
	public function getKosUsername()
	{
		$match = Strings::match($this->email, '#^(.+)@fit.cvut.cz$#');
		return ($match ? $match[1] : FALSE);
	}

}
