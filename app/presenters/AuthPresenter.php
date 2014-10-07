<?php

use Fitak\SignInManager;
use Fitak\SignUpManager;
use Fitak\DuplicateEmailException;
use Fitak\InvalidSignUpTokenException;
use Fitak\User;
use Fitak\UserAlreadyActivatedException;
use Nette\Application\UI;
use Nette\Security\AuthenticationException;
use Nette\Security\IAuthenticator;


class AuthPresenter extends BasePresenter
{

	/** @var SignInManager @inject */
	public $signInManager;

	/** @var SignUpManager @inject */
	public $signUpManager;

	/** @var string @persistent */
	public $backlink;


// === sign in =========================================================================================================

	protected function createComponentSignInForm()
	{
		$form = new UI\Form();
		$form->addText('email', 'ČVUT e-mail')
			->setType('email')
			->setRequired('Vyplň e-mailovou adresu.');
		$form->addPassword('password', 'Heslo')
			->setRequired('Vyplň heslo.');
		$form->addSubmit('signIn', 'Přihlásit');
		$form->onSuccess[] = [$this, 'processSignInForm'];

		return $form;
	}

	public function processSignInForm(UI\Form $form, array $values)
	{
		try
		{
			$this->signInManager->signIn($values['email'], $values['password']);
			$this->restoreRequest($this->backlink);
			$this->redirect('Homepage:');
		}
		catch (AuthenticationException $e)
		{
			/** @var UI\Form|\Nette\Forms\Controls\BaseControl[] $form */
			if ($e->getCode() === IAuthenticator::IDENTITY_NOT_FOUND)
			{
				$form['email']->addError('S tímto e-mailem tu není nikdo zaregistrovaný.');
			}
			elseif ($e->getCode() === IAuthenticator::NOT_APPROVED)
			{
				$form['email']->addError('Účet není ještě aktitován. Klikni na odkaz v e-mailu.');
			}
			elseif ($e->getCode() === IAuthenticator::INVALID_CREDENTIAL)
			{
				$form['password']->addError('Neplatné heslo.');
			}
			else
			{
				throw new \LogicException();
			}
		}
	}


// === sign out ========================================================================================================

	public function actionSignOut()
	{
		$this->signInManager->signOut();
		$this->flashMessage('Byl jsi odhlášen');
		$this->redirect('signIn');
	}


// === sign up =========================================================================================================

	protected function createComponentSignUpForm()
	{
		$form = new UI\Form();
		$form->addText('email', 'ČVUT e-mail')
			->setType('email')
			->setRequired('Vyplň e-mailovou adresu.')
			->addRule($form::EMAIL, 'Vyplněná e-mailová adresa nemá správný tvar, zkontroluj si překlepy.')
			->addRule($form::PATTERN, 'Musíš vyplnit ČVUT e-mail (na doméně *.cvut.cz).', '.+\.cvut.cz');
		$form->addPassword('password', 'Heslo')
			->setRequired('Vyplň heslo.');
		$form->addPassword('passwordCheck', 'Heslo (pro kontrolu)')
			->setOmitted()
			->setRequired('Vyplň heslo ještě jednou, pro kontrolu.')
			->addRule($form::EQUAL, 'Zadané hesla se musí shodovat, zkontroluj si překlepy.', $form['password']);
	    $form->addSubmit('signUp', 'Zaregistrovat se');
		$form->onSuccess[] = [$this, 'processSignUpForm'];

		return $form;
	}

	public function processSignUpForm(UI\Form $form, array $values)
	{
		try
		{
			$this->signUpManager->signUp($values['email'], $values['password']);
			$this->redirect('signUpAfter');
		}
		catch (DuplicateEmailException $e)
		{
			/** @var UI\Form|\Nette\Forms\Controls\BaseControl[] $form */
			$form['email']->addError('S tímto mailem je tu již někdo zaregistrovaný.');
		}
	}

	public function actionSignUpConfirm($userId, $token)
	{
		/** @var User $user */
		$user = $this->orm->users->getById($userId);
		if (!$user) $this->error();

		try
		{
			$this->signUpManager->confirmSignUp($user, $token);
			$this->signInManager->signInWithoutPassword($user);
			$this->flashMessage('Účet byl úspěšně aktitován');
			$this->redirect('Homepage:');
		}
		catch (UserAlreadyActivatedException $e)
		{
			$this->flashMessage('Tento účet byl již aktivován v minulosti', 'warning');
		}
		catch (InvalidSignUpTokenException $e)
		{
			$this->flashMessage('Neplatný aktivační token.', 'danger');
		}
	}

}
