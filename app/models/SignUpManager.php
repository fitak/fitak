<?php

namespace Fitak;

use Kdyby\Facebook\Facebook;
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

	/** @var  Facebook */
	private $facebook;

	public function __construct(Orm $orm, Mail\IMailer $mailer,
		LinkFactory $linkFactory, TagsImporter $tagsImporter, Facebook $facebook)
	{
		$this->orm = $orm;
		$this->mailer = $mailer;
		$this->linkFactory = $linkFactory;
		$this->tagsImporter = $tagsImporter;
		$this->facebook = $facebook;
	}

	private function extendFbAccessToken($token) {
		$this->facebook->setAccessToken($token);

		$setGraphVersion = $this->facebook->config->graphVersion;
		/*
		 * There is a bug in Kdyby/Facebook which cause that accessToken isn't
		 * extended when using FB Graph API v2.3 and newer (because it returns
		 * the result in JSON which Kdyby/Facebook can't read).
		 * So this is workaround until they fix it in the library.
		 */
		$this->facebook->config->graphVersion = "v2.2";

		$this->facebook->setExtendedAccessToken();
		$this->facebook->config->graphVersion = $setGraphVersion;

		return $this->facebook->getAccessToken();
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

		if ($values['fbAccessToken']) {
			$values['fbAccessToken'] = $this->extendFbAccessToken($values['fbAccessToken']);
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
