<?php

namespace Fitak;

use Nette;
use Nette\Mail;
use Nette\Utils\Random;
use Nextras\Application\LinkFactory;


class SignUpManager extends Nette\Object
{

	/** @var RepositoryContainer */
	private $orm;

	/** @var Nette\Mail\IMailer */
	private $mailer;

	/** @var LinkFactory */
	private $linkFactory;

	public function __construct(RepositoryContainer $orm, Mail\IMailer $mailer, LinkFactory $linkFactory)
	{
		$this->orm = $orm;
		$this->mailer = $mailer;
		$this->linkFactory = $linkFactory;
	}

	/**
	 * @param  string $email
	 * @param  string $password
	 * @return void
	 * @throws DuplicateEmailException
	 */
	public function signUp($email, $password)
	{
		$signUpToken = Random::generate(10);

		$user = new User();
		$user->email = $email;
		$user->passwordHash = password_hash($password, PASSWORD_BCRYPT);
		$user->signUpTokenHash = password_hash($signUpToken, PASSWORD_BCRYPT);
		$user->signUpTime = 'now';

		try
		{
			$this->orm->users->persistAndFlush($user);
		}
		catch (DuplicateEntryException $e)
		{
			throw new DuplicateEmailException();
		}

		$confirmLink = htmlspecialchars($this->linkFactory->link('//Auth:sign-up-confirm', [
			'userId' => $user->id,
			'token' => $signUpToken,
		]));

		$mail = new Mail\Message();
		$mail->setFrom('admin@fitak.cz');
		$mail->addTo($email);
		$mail->setSubject('Potvrzení registrace na Fiťák.cz');
		$mail->setHtmlBody(
			"Ahoj,<br>" .
			"pro potvrzení registace na webu Fiťák.cz je potřeba kliknout na následující odkaz:<br>" .
			"<a href=\"$confirmLink\">$confirmLink</a><br>" .
			"<br>" .
			"Fiťák.cz"
		);

		$this->mailer->send($mail);
	}

	/**
	 * Confirms user registration with a token which user received by email.
	 *
	 * @param  User   $user
	 * @param  string $token
	 * @return void
	 * @throws UserAlreadyActivatedException
	 * @throws InvalidSignUpTokenException
	 */
	public function confirmSignUp(User $user, $token)
	{
		if ($user->signUpTokenHash === NULL)
		{
			throw new UserAlreadyActivatedException();
		}

		if (!password_verify($token, $user->signUpTokenHash))
		{
			throw new InvalidSignUpTokenException();
		}

		$user->signUpTokenHash = NULL;
		$this->orm->users->persistAndFlush($user);
	}

}


class DuplicateEmailException extends \RuntimeException
{

}

class UserAlreadyActivatedException extends \RuntimeException
{

}

class InvalidSignUpTokenException extends \RuntimeException
{

}
