<?php

use Fitak\Orm;
use Fitak\Post;
use Nette\Application\UI\Form;

class PostForm extends Form
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

		$this->addSubmit('send', 'Vyhledat');
	}

	public function submitted(self $form)
	{
		$values = $form->getValues(TRUE);
		$message = $values['message'];

		$this->savePost($message, $this->user);

		$parameters = $this->getPresenter()->getParameters();
		unset($parameters['do']);

		$this->presenter->redirect('Search:', $parameters);
	}

	public function savePost($message, $user)
	{
		$post = new Post();
		$post->message = $message;
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
