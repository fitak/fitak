<?php

/**
 * Parent class for all other presenters with common properties.
 *
 * It provides global access to Nextras ORM database.
 * It has methods for checking login and retrieving logged user.
 * It provides common variables (user and FB groups) to all templates
 * through overriding createTemplate() method.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/** This enables use of secured links in all presenters with annotation. */
	use Nextras\Application\UI\SecuredLinksPresenterTrait;

	/** @var Nette\Security\IUserStorage @inject */
	public $userStorage;

	/** @var Fitak\TemplateFactory @inject */
	public $templateFactory;

	/** @var Fitak\Orm @inject */
	public $orm;

	/**
	 * Redirects not logged user to sign in page.
	 *
	 * It is used in all presenters which requires logged user.
	 * It checks if user is logged and if not, it redirects to signIn
	 * presenter and shows flash message with parametrised message.
	 *
	 * @param  string $message flash message displayed in case the user is not signed in.
	 *
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

	/**
	 * Check if user is authenticated.
	 *
	 * If so, it returns ORM object from database with all user data.
	 * If not, it returns NULL.
	 *
	 * @return Fitak\User|NULL
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
	 * Add global variables to template (FB groups list and user data).
	 */
	protected function beforeRender()
	{
		$this->template->groupList = $this->orm->groups->findAllSorted();
		$this->template->user = $this->getLoggedInUser();
	}
}
