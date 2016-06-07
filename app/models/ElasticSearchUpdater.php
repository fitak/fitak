<?php

namespace Fitak;

use ElasticSearch;
use Kdyby;
use Nette;
use Nextras\Orm\Entity\IEntity;


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

	private function getDefaultData(Post $post)
	{
		$addons = trim(implode(', ', [
			$post->description,
			$post->caption,
		]));
		$group = $post->group ? $post->group->id : NULL;
		return [
			'tags' => $post->getParsedTags()[0],
			'message' => $post->getMessageWithoutTags(),
			'message_addons' => $addons,
			'author' => $post->user->name,
			'is_topic' => ($post->parent === NULL),
            'deleted' => ($post->deleted),
			'updated_time' => $post->updatedTime->getTimestamp(),
			'group' => $group,
		];
	}

	public function onAfterInsert(IEntity $post)
	{
		if ($post instanceof Post)
		{
			$this->elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $post->id, $this->getDefaultData($post));
		}
	}

	public function onAfterUpdate(IEntity $post)
	{
		if ($post instanceof Post)
		{
			$this->elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $post->id, $this->getDefaultData($post));
		}
	}

}
