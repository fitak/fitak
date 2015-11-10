<?php

use Fitak\RepositoryContainer;
use Fitak\PostManager;
use Nette\Application\UI\Form;

class PostForm extends Form
{
	/** @var postManager @inject */
	public $postManager;

	private $orm;

	const SEMESTER = 'semester';

	public function __construct(RepositoryContainer $orm)
	{
		parent::__construct();

		$this->orm = $orm;

		$this->addText('message', 'zprava');

		$this->addSubmit('send', 'Vyhledat');
	}

	public function submitted(self $form)
	{
		$values = $form->getValues(TRUE);
		$message = $values['message'];

		$this->postManager = new PostManager($this->orm, $message);
		$this->postManager->savePost($message);

//		$this->orm->groups;

//
//		$this->presenter->redirect('Search:', $params);
//		$this->
	}

}
