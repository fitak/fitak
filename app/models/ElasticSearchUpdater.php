<?php

namespace Fitak;

use ElasticSearch;
use Kdyby;
use Nette;
use Nextras\Orm;


class ElasticSearchUpdater extends Nette\Object implements Kdyby\Events\Subscriber
{

	/** @var ElasticSearch */
	private $elastic;

	public function __construct(ElasticSearch $elastic)
	{
		$this->elastic = $elastic;
	}

	/**
	 * @inheritdoc
	 */
	public function getSubscribedEvents()
	{
		return [
			'Nextras\Orm\Repository\Repository::onAfterInsert' => 'onAfterInsert',
			'Nextras\Orm\Repository\Repository::onAfterUpdate' => 'onAfterUpdate',
		];
	}

	public function onAfterInsert(Orm\Entity\IEntity $post)
	{
		if ($post instanceof Post)
		{
			$this->elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $post->id, [
				'message' => $post->message,
				'author' => $post->fromName,
				'is_topic' => ($post->parent === NULL),
				'created_time' => $post->createdTime->getTimestamp(),
				'group' => $post->group->id,
				'likes' => $post->likesCount,
			]);
		}
	}

	public function onAfterUpdate(Orm\Entity\IEntity $post)
	{
		if ($post instanceof Post)
		{
			$this->elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $post->id, [
				'message' => $post->message,
				'likes' => $post->likesCount,
			]);
		}
	}

}
