<?php

use Fitak\InvalidPasswordResetTokenException;
use Fitak\PasswordResetManager;
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

	/** @var PasswordResetManager @inject */
	public $passwordResetManager;

	/** @var string @persistent */
	public $backlink;

	/** @var \Kdyby\Facebook\Facebook @inject */
	public $facebook;


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
                $form['email']->addError('Účet není ještě aktivován. Klikni na odkaz v e-mailu.');
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

    public function handleFacebookLogin()
	{
		$array = $this->getRequest()->getPost();

		try {
			$this->signInManager->signInFacebook($array["accountId"]);
			$this->redirect('Homepage:');
		} catch (AuthenticationException $e) {
			$this->signUpManager->signUpUsingFacebook($array);
		} catch (AuthenticationException $e) {
			$this->payload->errorMessage = "Zle profilove data.";
			\Tracy\Debugger::log($array);
		} catch (DuplicateEmailException $e) {
			$this->payload->errorMessage = "Tento pouzivatel s takymto emailom uz existuje.";
		}

		$this->sendPayload();
	}


// === password reset ==================================================================================================

	/**
	 * @return UI\Form
	 */
	protected function createComponentLostPasswordForm()
	{
		$form = new UI\Form();
		$form->addText('email', 'ČVUT e-mail')
			->setType('email')
			->setRequired('Vyplň e-mailovou adresu.')
			->addRule($form::EMAIL, 'Vyplněná e-mailová adresa nemá správný tvar, zkontroluj si překlepy.');
		$form->addSubmit('reset', 'Resetovat heslo');
		$form->onSuccess[] = [$this, 'processLostPasswordForm'];

		return $form;
	}

	public function processLostPasswordForm(UI\Form $form, array $values)
	{
		$user = $this->orm->users->getByEmail($values['email']);
		if (!$user)
		{
			$form['email']->addError('S tímto mailem tu není nikdo zaregistrovaný.');
			return;
		}

		$this->passwordResetManager->sendResetLink($user);
		$this->flashMessage('Na zadanou e-mailovou adresu jsme ti odeslali odkaz k resetování hesla.');
		$this->redirect('this');
	}

	protected function createComponentPasswordResetForm()
	{
		$form = new UI\Form();
		$form->addPassword('password', 'Nové heslo')
			->setRequired('Vyplň nové heslo.');
		$form->addPassword('passwordCheck', 'Nové heslo (pro kontrolu)')
			->setOmitted()
			->setRequired('Vyplň nové heslo ještě jednou, pro kontrolu.')
			->addRule($form::EQUAL, 'Zadané hesla se musí shodovat, zkontroluj si překlepy.', $form['password']);
		$form->addHidden('userId', $this->getParameter('userId'));
		$form->addHidden('token', $this->getParameter('token'));
		$form->addSubmit('change', 'Změnit heslo');
		$form->onSuccess[] = [$this, 'processPasswordResetForm'];

		return $form;
	}

	public function processPasswordResetForm(UI\Form $form, array $values)
	{
		$user = $this->orm->users->getById($values['userId']);
		if (!$user) $this->error();

		try
		{
			$this->passwordResetManager->resetPassword($user, $values['token'], $values['password']);
			$this->signInManager->signInWithoutPassword($user);
			$this->flashMessage('Heslo bylo úspěšně změněno');
			$this->redirect('Homepage:');
		}
		catch (InvalidPasswordResetTokenException $e)
		{
			$this->flashMessage('Neplatný token pro reset hesla.', 'danger');
			$this->redirect('passwordReset');
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
			->setOption('description', '(jiné než „Heslo ČVUT“)')
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
			$this->flashMessage('Účet byl úspěšně aktivován.');
			$this->redirect('Homepage:');
		}
		catch (UserAlreadyActivatedException $e)
		{
			$this->flashMessage('Tento účet byl již aktivován v minulosti.', 'warning');
		}
		catch (InvalidSignUpTokenException $e)
		{
			$this->flashMessage('Neplatný aktivační token.', 'danger');
		}
	}

}
