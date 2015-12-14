<?php

namespace Fitak;
use Nette;

class PostManager extends Nette\Object
{

	/** @var Orm */
	private $orm;

	private $message;

	/**
	 * @param Orm $orm
	 *
	 * @param string                  $message
	 *
	 * @internal param Nette\Security\IUserStorage $userStorage
	 */
	public function __construct(Orm $orm, $message = "")
	{
		$this->orm = $orm;
		$this->message = $message;
	}

	public function savePost($message)
	{
		$post = new Post();
		$post->message = $message;
		$post->fromName = "Petricek";
		$post->fromId = "127566249";
		$post->type = "status";
		$post->createdTime = 'now';
		$post->updatedTime = 'now';
		$this->orm->posts->persistAndFlush($post);
	}

}

