<?php

use Fitak\Orm;
use Fitak\Post;
use Fitak\User;
use Kdyby\Facebook\Facebook;
use Kdyby\Facebook\FacebookApiException;
use \Nette\Application\UI\Form;

class CommentForm extends Form
{
	private $orm;
	private $user;
	private $facebook;
	const SEMESTER = 'semester';

	public function __construct(Orm $orm, User $user, Facebook $facebook)
	{
		parent::__construct();

		$this->orm = $orm;
		$this->user = $user;
		$this->facebook = $facebook;
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

	public function commentToFacebook($message, $user, $parentId)
	{
		$parentPostFbId = $this->orm->posts->getById($parentId)->fbId;
		$fb = $this->facebook;
		$fb->setAccessToken($user->fbAccessToken);

		return $fb->api($parentPostFbId . '/comments', 'POST', ['message' => $message]);
	}

	private function isFbPost($parentId)
	{
		if ($this->orm->posts->getById($parentId)->fbId) {
			return true;
		}

		return false;
	}

	public function saveComment($message, $user, $parentId)
	{
		$fbId = null;
		if ($this->isFbPost($parentId)) {
			$fbId = $this->commentToFacebook($message, $user, $parentId)['id'];
		}

		$comment = new Post();
		$comment->fbId = $fbId;
		$comment->message = $message;
		$comment->user = $user;
		$comment->createdTime = 'now';
		$comment->updatedTime = 'now';
		$comment->type = $comment::TYPE_STATUS;
		$this->orm->posts->attach($comment);
		$comment->parent = $this->orm->posts->getById($parentId);

		$parent = $comment->parent;
		$comment->group = $parent->group;
		$parent->updatedTime = 'now';
		if ($parent->parent) {
			$parent->parent->updatedTime = 'now';
		}

		$this->orm->posts->persistAndFlush($comment);
	}

}
