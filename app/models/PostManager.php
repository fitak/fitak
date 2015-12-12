<?php

namespace Fitak;

use Nette;
use Tracy\Debugger;


class PostManager extends Nette\Object
{

	/** @var RepositoryContainer */
	private $orm;

	private $message;

	/**
	 * @param RepositoryContainer $orm
	 *
	 * @param                     $message
	 *
	 * @internal param Nette\Security\IUserStorage $userStorage
	 */
	public function __construct(RepositoryContainer $orm, $message = "")
	{
		$this->orm = $orm;
		$this->message = $message;
	}

	public function savePost($message)
	{
		var_dump($message);
		$group = $this->orm->groups->getById('343257012467087');
//		Debugger::dump($group);

//		$post = new Post();
//		$group = new Group();
//		$group->id = 343257012467087;

		$post = new Post();
		$post->message = $message;
		$post->fromName = "Petricek";
		$post->fromId = "127566249";
		$post->type = "status";
		$post->id = "9999999999";
//		$post->groupId = 343257012467087;
//		$post->
		$post->group = $group;
		$post->createdTime = 'now';
		$post->updatedTime = 'now';
//		$post->group =
		$this->orm->posts->persistAndFlush($post);
//		var_dump($post);
	}

}

