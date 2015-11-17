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
		return [
			'tags' => $post->getParsedTags()[0],
			'message' => $post->getMessageWithoutTags(),
			'message_addons' => $addons,
		];
	}

	public function onAfterInsert(IEntity $post)
	{
		if ($post instanceof Post)
		{
			$this->elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $post->id, [
				'author' => $post->fromName,
				'is_topic' => ($post->parent === NULL),
				'updated_time' => $post->updatedTime->getTimestamp(),
				'group' => $post->group->id,
			] + $this->getDefaultData($post));
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
