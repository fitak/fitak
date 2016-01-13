<?php

use Fitak\Orm;
use Fitak\Post;
use \Nette\Application\UI\Form;

class CommentForm extends Form
{
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

		$this->saveComment($message, $this->user, $parent_id);

		$parameters = $this->getPresenter()->getParameters();
		unset($parameters['do']);

		$this->presenter->redirect('Search:', $parameters);
	}

	public function saveComment($message, $user, $parent_id)
	{
		$comment = new Post();
		$comment->message = $message;
		$comment->user = $user;
		$comment->createdTime = 'now';
		$comment->updatedTime = 'now';
		$comment->type = $comment::TYPE_STATUS;
		$this->orm->posts->attach($comment);
		$comment->parent = $this->orm->posts->getById($parent_id);

		$this->orm->posts->persistAndFlush($comment);
	}

}
