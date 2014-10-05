<?php

namespace Fitak;

use Nette;


class SignInManager extends Nette\Object
{

	/** @var RepositoryContainer */
	private $orm;

	/** @var Nette\Security\IUserStorage */
	private $userStorage;

	/**
	 * @param RepositoryContainer         $orm
	 * @param Nette\Security\IUserStorage $userStorage
	 */
	public function __construct(RepositoryContainer $orm, Nette\Security\IUserStorage $userStorage)
	{
		$this->orm = $orm;
		$this->userStorage = $userStorage;
	}

	/**
	 * @param  string $email
	 * @param  string $password
	 * @return void
	 * @throws Nette\Security\AuthenticationException
	 */
	public function signIn($email, $password)
	{
		$user = $this->orm->users->getByEmail($email);
		if ($user === NULL)
		{
			throw new Nette\Security\AuthenticationException('User not found', Nette\Security\IAuthenticator::IDENTITY_NOT_FOUND);
		}

		if (!$user->isActivated)
		{
			throw new Nette\Security\AuthenticationException('User is not activated', Nette\Security\IAuthenticator::NOT_APPROVED);
		}

		if (!password_verify($password, $user->passwordHash))
		{
			throw new Nette\Security\AuthenticationException('Invalid password', Nette\Security\IAuthenticator::INVALID_CREDENTIAL);
		}

		$this->signInWithoutPassword($user);
	}

	/**
	 * @param  User $user
	 * @return void
	 */
	public function signInWithoutPassword(User $user)
	{
		$identity = new Nette\Security\Identity($user->id);
		$this->userStorage->setExpiration('+ 90 days', Nette\Security\IUserStorage::CLEAR_IDENTITY);
		$this->userStorage->setIdentity($identity);
		$this->userStorage->setAuthenticated(TRUE);
	}

	/**
	 * @return void
	 */
	public function signOut()
	{
		$this->userStorage->setAuthenticated(FALSE);
		$this->userStorage->setIdentity(NULL);
	}

}

