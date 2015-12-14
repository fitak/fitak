<?php

namespace Fitak;
use Nette;
use Nette\Security\IUserStorage;

class PostManager extends Nette\Object
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

