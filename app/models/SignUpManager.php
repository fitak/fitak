<?php

namespace Fitak;

use Nette;
use Nette\Mail;
use Nette\Utils\Random;
use Nextras\Application\LinkFactory;
use Nextras\Dbal\UniqueConstraintViolationException;

class SignUpManager extends Nette\Object
{

	/** @var Orm */
	private $orm;

	/** @var Nette\Mail\IMailer */
	private $mailer;

	/** @var LinkFactory */
	private $linkFactory;

	/** @var TagsImporter */
	private $tagsImporter;

	public function __construct(Orm $orm, Mail\IMailer $mailer,
		LinkFactory $linkFactory, TagsImporter $tagsImporter)
	{
		$this->orm = $orm;
		$this->mailer = $mailer;
		$this->linkFactory = $linkFactory;
		$this->tagsImporter = $tagsImporter;
	}

	/**
	 * @param $values
	 *
	 * @internal param string $email
	 * @internal param string $password
	 *
	 * @return void
	 */
	public function signUp($values)
	{
		$signUpToken = Random::generate(10);

		foreach ($values as $key => $value) {
			if ($values[$key] == "") {
				$values[$key] = NULL;
			}
		}

		$user = NULL;
		if ($values['fbId']) {
			$user = $this->orm->users->getByFbId($values['fbId']);
		}
		if (!$user) {
			$user = new User();
		}

		$user->email = $values['email'];
		$user->passwordHash = password_hash($values['password'], PASSWORD_BCRYPT);
		$user->signUpTokenHash = password_hash($signUpToken, PASSWORD_BCRYPT);
		$user->signUpTime = 'now';
		$user->registered = 0;
		$user->fbId = $values['fbId'];
		$user->fbAccessToken = $values['fbAccessToken'];
		$user->name = $values['name'];
		$user->profilePicture = $values['profilePicture'];

		try {
//			$this->tagsImporter->importTags($user);
			$this->orm->users->persistAndFlush($user);
		} catch (DuplicateEntryException $e) {
			throw new DuplicateEmailException();
		} catch (UniqueConstraintViolationException $e) {
			throw new DuplicateEmailException();
		}

		$confirmLink = htmlspecialchars($this->linkFactory->link('//Auth:sign-up-confirm', [
			'userId' => $user->id,
			'token' => $signUpToken,
		]));

		$mail = new Mail\Message();
		$mail->setFrom('admin@fitak.cz');
		$mail->addTo($user->email);
		$mail->setSubject('Potvrzení registrace na Fiťák.cz');
		$mail->setHtmlBody(
			"Ahoj,<br>" .
			"pro potvrzení registace na webu Fiťák.cz je potřeba kliknout na následující odkaz:<br>" .
			"<a href=\"$confirmLink\">$confirmLink</a><br>" .
			"<br>" .
			"Fiťák.cz"
		);

		try {
			$this->mailer->send($mail);
		} catch (Mail\SmtpException $e) {
//			throw new CannotSendEmail("Link: $confirmLink");
			throw new CannotSendEmail("Nelze odeslat e-mail, zkontrolujte připojení.");
		}
	}

	/**
	 * Confirms user registration with a token which user received by email.
	 *
	 * @param  User   $user
	 * @param  string $token
	 *
	 * @return void
	 * @throws UserAlreadyActivatedException
	 * @throws InvalidSignUpTokenException
	 */
	public function confirmSignUp(User $user, $token)
	{
		if ($user->signUpTokenHash === NULL) {
			throw new UserAlreadyActivatedException();
		}

		if (!password_verify($token, $user->signUpTokenHash)) {
			throw new InvalidSignUpTokenException();
		}

		$user->signUpTokenHash = NULL;
		$user->registered = 1;
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

class CannotSendEmail extends \RuntimeException
{

}
