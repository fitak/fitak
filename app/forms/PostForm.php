<?php

use Fitak\Orm;
use Fitak\Post;
use Kdyby\Facebook\Facebook;
use Nette\Application\UI\Form;
use Nextras\Orm\Entity\IEntity;

class PostForm extends Form
{

	private $orm;

	private $user;

	private $facebook;

	const SEMESTER = 'semester';

	public function __construct(Orm $orm, $user, Facebook $facebook)
	{
		parent::__construct();
		$this->orm = $orm;
		$this->user = $user;
		$this->facebook = $facebook;

		$groups = $this->orm->groups->findList();

		$this->addText('message', 'zprava');
		$this->addCheckbox('sendToFb', 'poslat do FB skupiny');
		$this->addSelect('fbGroup', 'Výběr FB skupiny', $groups);
		$this->addSubmit('send', 'Vyhledat');
	}

	public function submitted(self $form)
	{
		$values = $form->getValues(TRUE);

		$this->savePost($values, $this->user);

		$parameters = $this->getPresenter()->getParameters();
		unset($parameters['do']);

		$this->presenter->redirect('Search:', $parameters);
	}

	private function parseId($longId)
	{
		return preg_replace('~^\d+_~', '', $longId);
	}

	public function postToFacebook($message, $user, $groupId)
	{
		$fb = $this->facebook;
		$fb->setAccessToken($user->fbAccessToken);

		return $fb->api($groupId. '/feed', 'POST', ['message' => $message]);
	}

		public function savePost($values, $user)
	{
		$fbId = null;
		$fbGroup = null;

		if ($values['sendToFb']) {
			$fbId = $this->postToFacebook($values['message'], $user, $values['fbGroup'])['id'];

			if (!$fbId) {
				return;
				//TODO throw exception
			}

			$fbId = $this->parseId($fbId);
			$fbGroup = $values['fbGroup'];
		}

		$post = new Post();
		$post->fbId = $fbId;
		$post->group = $this->orm->groups->getById($fbGroup);
		$post->message = $values['message'];
		$post->user = $user;
		$post->createdTime = 'now';
		$post->updatedTime = 'now';

		$tags = array();
		foreach ($post->getParsedTags()[0] as $tag)
		{
			array_push($tags, $this->orm->tags->getByNameOrCreate($tag));
		}
		$post->tags->set($tags);

		$post->type = $post::TYPE_STATUS;
		$this->orm->posts->persistAndFlush($post);
	}

}
