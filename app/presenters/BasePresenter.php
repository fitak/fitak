<?php

use Fitak\RepositoryContainer;
use Fitak\TemplateFactory;
use Fitak\User;


/**
 * Base class for all application presenters.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	use Nextras\Application\UI\SecuredLinksPresenterTrait;

	/** @var Nette\Security\IUserStorage @inject */
	public $userStorage;

	/** @var TemplateFactory @inject */
	public $templateFactory;

	/** @var RepositoryContainer @inject */
	public $orm;

	/**
	 * @return User|NULL
	 */
	public function getLoggedInUser()
	{
		if ($this->userStorage->isAuthenticated())
		{
			$identity = $this->userStorage->getIdentity();
			if ($identity !== NULL)
			{
				return $this->orm->users->getById($identity->getId());
			}
		}
		return NULL;
	}

	/**
	 * @param  string $message displayed in case the user is not signed in.
	 * @return void
	 */
	public function requireLogin($message = 'Tato stránka vyžaduje přihlášení.')
	{
		if ($this->getLoggedInUser() === NULL)
		{
			$this->flashMessage($message);
			$this->redirect('Auth:signIn', ['backlink' => $this->storeRequest()]);
		}
	}

	protected function createTemplate($class = NULL)
	{
		$template = $this->templateFactory->createTemplate($this);
		$template->groupList = $this->orm->groups->findAllSorted();
		$template->user = $this->getLoggedInUser();

		return $template;
	}

    public function beforeRender() {
        $this->template->loggedIn = $this->userStorage->isAuthenticated();
    }
}
