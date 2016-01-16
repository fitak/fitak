<?php

namespace Fitak;

use DateTime;
use Nette\Utils\Strings;
use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany;
use Nextras\Orm\Relationships\OneHasMany;


/**
 * @property string|NULL       $email
 * @property string|NULL       $passwordHash
 * @property string|NULL       $fbId
 * @property string|NULL       $fbAccessToken
 * @property string            $name
 * @property string|NULL       $signUpTokenHash
 * @property DateTime|NULL     $signUpTime
 * @property string|NULL       $passwordResetTokenHash
 * @property string|NULL       $profilePicture
 * @property bool              $registered
 *
 * @property ManyHasMany|Tag[] $favoriteTags        {m:n TagsRepository $favoredBy primary}
 * @property OneHasMany|Post[] $posts  {1:m PostsRepository $user}
 * @property OneHasMany|Vote[] $votes  {1:m VotesRepository $user}
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
