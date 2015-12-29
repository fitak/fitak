<?php

namespace Fitak;
use Nette;
use Nette\Security\IUserStorage;

class CommentManager extends Nette\Object
{


	private $message;

	private $orm;

	/**
	 * @param Orm    $orm
	 *
	 * @param string $message
	 *
	 * @param        $user
	 *
	 * @internal param Nette\Security\IUserStorage $userStorage
	 */
	public function __construct(Orm $orm)
	{
		$this->orm = $orm;
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

