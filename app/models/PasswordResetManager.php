<?php

namespace Fitak;

use Nette;
use Nette\Mail;
use Nette\Utils\Random;
use Nextras\Application\LinkFactory;


class PasswordResetManager extends Nette\Object
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
	 * Sends a user mail with link to reset his password.
	 *
	 * @param  User $user
	 * @return void
	 */
	public function sendResetLink(User $user)
	{
		$passwordResetToken = Random::generate(10);
		$user->passwordResetTokenHash = password_hash($passwordResetToken, PASSWORD_BCRYPT);
		$this->orm->users->persistAndFlush($user);

		$homeLink = htmlspecialchars($this->linkFactory->link('//Homepage:default'));
		$confirmLink = htmlspecialchars($this->linkFactory->link('//Auth:passwordResetConfirm', [
			'userId' => $user->id,
			'token' => $passwordResetToken,
		]));

		$mail = new Mail\Message();
		$mail->setFrom('admin@fitak.cz');
		$mail->addTo($user->email);
		$mail->setSubject('Změna hesla na Fiťak.cz');
		$mail->setHtmlBody(
			"Ahoj,<br>" .
			"tento e-mail to posíláme, protože jsi požádal o <strong>změnu hesla</strong> na webu " .
			"<a href=\"$homeLink\">Fiťák.cz</a>. Pro potvrzení prosím klikni na následující odkaz:<br>" .
			"<a href=\"$confirmLink\">$confirmLink</a><br>" .
			"<br>" .
			"Fiťák.cz"
		);

		$this->mailer->send($mail);
	}

	/**
	 * Resets user's password, requires valid passwordResetToken.
	 *
	 * @param  User   $user
	 * @param  string $passwordResetToken
	 * @param  string $newPassword
	 * @return void
	 * @throws InvalidPasswordResetTokenException
	 */
	public function resetPassword(User $user, $passwordResetToken, $newPassword)
	{
		if (!password_verify($passwordResetToken, $user->passwordResetTokenHash))
		{
			throw new InvalidPasswordResetTokenException();
		}

		$user->passwordResetTokenHash = NULL;
		$user->passwordHash = password_hash($newPassword, PASSWORD_BCRYPT);
		$this->orm->users->persistAndFlush($user);
	}

}


class InvalidPasswordResetTokenException extends \RuntimeException
{

}
