<?php

use Fitak\Orm;
use Fitak\TemplateFactory;
use Nette\Application\UI;

class StreamControl extends UI\Control
{

	/** @var IStreamDataSource */
	public $dataSource;

	/** @var int maximum number of topics on a single page */
	public $topicsPerPage = 20;

	private $templateFactory;

	public $orm;

	public $userStorage;

	public function __construct(TemplateFactory $templateFactory, Orm $orm, Nette\Security\IUserStorage $userStorage)
	{
		parent::__construct();
		$this->templateFactory = $templateFactory;
		$this->orm = $orm;
		$this->userStorage = $userStorage;
	}


	public function render()
	{
		/** @var $paginator Nette\Utils\Paginator */
		$paginator = $this['paginator']->paginator;

		$this->template->topics = $this->dataSource->getTopics($paginator->itemsPerPage, $paginator->offset);
		$this->template->render();
	}

	protected function createComponentPaginator()
	{
		$vp = new VisualPaginator();
		$vp->paginator->itemsPerPage = $this->topicsPerPage;
		$vp->paginator->itemCount = $this->dataSource->getTotalCount();

		return $vp;
	}

	protected function createComponentCommentForm()
	{

		$form = new CommentForm($this->orm, $this->getLoggedInUser());
		$form->onSuccess[] = callback($form, 'submitted');

		return $form;
	}

	protected function createTemplate($class = NULL)
	{
		$template = $this->templateFactory->createTemplate($this);
		$template->setFile(__DIR__ . '/StreamControl.latte');

		return $template;
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
}
