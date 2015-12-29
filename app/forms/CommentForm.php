<?php

use Fitak\Orm;
use Fitak\CommentManager;
use Nette\Application\UI\Form;

class CommentForm extends Form
{
	/** @var commentManager @inject */
	public $commentManager;

	private $orm;

	private $user;

	const SEMESTER = 'semester';

	public function __construct(Orm $orm, $user)
	{
		parent::__construct();

		$this->orm = $orm;
		$this->user = $user;
		$this->addText('message', 'zprava');
		$this->addHidden('parent_id');
		$this->addSubmit('send', 'Vyhledat');
	}

	public function submitted(self $form)
	{
		$values = $form->getValues(TRUE);
		$message = $values['message'];
		$parent_id = $values['parent_id'];

		$this->commentManager = new CommentManager($this->orm);
		$this->commentManager->saveComment($message, $this->user, $parent_id);

		$parameters = $this->getPresenter()->getParameters();
		unset($parameters['do']);

		$this->presenter->redirect('Search:', $parameters);
	}

}
