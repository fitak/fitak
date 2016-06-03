<?php

use Fitak\PostManager;
use Kdyby\Facebook\Dialog\LoginDialog;


/**
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
class HomepagePresenter extends BasePresenter
{
	/** @var \Kdyby\Facebook\Facebook @inject */
	public $facebook;

	/** @var SearchRequest */
	private $searchRequest;

	protected function startup()
	{
		parent::startup();
		$this->requireLogin('Pro přístup k obsahu je nutné se přihlásit.');
	}

	public function actionDefault($s, $from = NULL, array $groups = NULL, $limit = NULL, $streamView = NULL)
	{
//		$parsed = $this->context->searchQueryParser->parseQuery($s);
		$parsed = $this->context->getService('searchQueryParser')->parseQuery($s);

		$this->searchRequest = new SearchRequest();
		$this->searchRequest->query = $parsed['query'];
		$this->searchRequest->tags = $parsed['tags'];
		$this->searchRequest->from = $from;
		$this->searchRequest->groups = ($groups ? array_map('strval', $groups) : NULL);
		$this->searchRequest->timeLimit = $limit;

//		$dataModel = $this->context->data;
		$dataModel = $this->context->getService('data');
		$this['stream']->dataSource = new SearchDataSource($dataModel, $this->searchRequest);
	}

	public function renderDefault($s, $from = NULL, array $groups = NULL, $limit = NULL, $streamView = NULL)
	{
		$this->template->advancedSearch = FALSE;
		$this->template->advancedSearch = (($this->searchRequest->from || $this->searchRequest->groups) && !$streamView);
		$this->template->tags = $this->searchRequest->tags;
		$this->template->resultsCount = $this['stream']->dataSource->getTotalCount();
	}

	public function actionStream()
	{
		$this['stream']->dataSource = new CompleteStreamDataSource($this->context->data);
	}

	protected function createComponentSearchForm()
	{
		if ($this->searchRequest->groups)
		{
			$groups = $this->searchRequest->groups;
		}
		else
		{
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

	protected function createComponentPostForm()
	{

		$form = new PostForm($this->orm, $this->getLoggedInUser(), $this->facebook);
		$form->onSuccess[] = callback($form, 'submitted');

		return $form;
	}


	protected function createComponentStream()
	{
		return new StreamControl($this->templateFactory, $this->orm, $this->getLoggedInUser(), $this->facebook);
	}

	protected function createComponentFbLogin()
	{
		/** @var FacebookLoginDialog $dialog */
//		$this->facebook->destroySession();
		$this->facebook->getSession()->clear('user_id');
		$this->facebook->getSession()->clear('access_token');
		$dialog = $this->facebook->createDialog('login');
		$dialog->onResponse[] = function (LoginDialog $dialog) {
			$fb = $dialog->getFacebook();
			try {
				if (!$fb->getUser()) {
					$this->flashMessage('auth.flash.fb.denied', 'error');
					$this->redirect('default');
				}
				$me = $fb->api('/me');
				$this->flashMessage('FB ID: ' . $fb->getUser());
				$this->flashMessage('FB accessToken: ' . $fb->getAccessToken());
				$this->flashMessage('FB name: ' . $me['name']);
			} catch (FacebookApiException $e) {
				$this->flashMessage('auth.flash.fb.error');
			}
//			$this->redirect('Auth:in');
		};

		return $dialog;
	}

}
