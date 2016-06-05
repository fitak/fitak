<?php
use Fitak\SavedSearch;
use Nette\Application\UI;
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

    /** @var SearchRequest */
    private $searchRequest;

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

    protected function createComponentSearchForm()
    {
        if ($this->searchRequest->groups) {
            $groups = $this->searchRequest->groups;
        } else {
            $groups = $this->orm->groups->findAll()->fetchPairs(NULL, 'id');
        }

        $form = new SearchForm($this->orm);
        $form->setDefaults([
            's' => $this->getParameter('s'),
            'since' => $this->getParameter('since', 0),
            'from' => $this->searchRequest ? $this->searchRequest->from : NULL,
            'groups' => $groups,
        ]);
        $form->onSuccess[] = callback($form, 'submitted');

        return $form;
    }

    protected function createComponentSaveSearchForm() {
        $form = new UI\Form;
        $form->addText('name', 'Popis');
        $form->addHidden('query', 'SearchQuery');
        $form->addSubmit('submit', 'Uložit');
        $form->onSuccess[] = [$this, 'saveSearch'];
        return $form;
    }

    public function saveSearch(UI\Form $form, $values) {
        $values = $form->getValues(TRUE);
        $savedSearch = new SavedSearch();
        $savedSearch->name = $values['name'];
        $savedSearch->query = $values['query'];
        $savedSearch->users->add($this->getLoggedInUser());

        $this->orm->savedSearches->persistAndFlush($savedSearch);

        $this->flashMessage('Hledání uloženo', 'success');
        $this->redirect('Homepage:', $values['query']);

    }

	/**
	 * Add global variables to template (FB groups list and user data)
	 * and register custom filters and macros.
	 *
	 * @param null $class
	 *
	 * @return \Nette\Application\UI\ITemplate
	 */
	protected function createTemplate($class = NULL)
	{
		$template = $this->templateFactory->createTemplate($this);
		$template->groupList = $this->orm->groups->findAllSorted();
		$template->user = $this->getLoggedInUser();

		return $template;
	}
}
