<?php

use Fitak\PasswordResetManager;
use Nette\Application\UI;


class SettingsPresenter extends BasePresenter
{

	/** @var PasswordResetManager @inject */
	public $passwordResetManager;

	protected function startup()
	{
		parent::startup();
		$this->requireLogin('Pro přístup k nastavení je nutné se přihlásit.');
	}

	/**
	 * @secured
	 */
	public function handleResetPassword()
	{
		$this->passwordResetManager->sendResetLink($this->getLoggedInUser());
		$this->flashMessage('Na mail jsme ti poslali odkaz pro resetování hesla.');
		$this->redirect('this');
	}

}
