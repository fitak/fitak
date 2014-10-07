<?php

namespace Fitak;

use DateTime;
use Nette\Utils\Strings;
use Nextras\Orm;
use Nextras\Orm\Relationships\OneHasMany;
use Nextras\Orm\Relationships\ManyHasMany;
use Tags;


/**
 * @property string            $id
 * @property Post|NULL         $parent   {m:1 PostsRepository $comments}
 * @property Group             $group    {m:1 GroupsRepository $posts}
 * @property string            $message
 * @property DateTime          $createdTime
 * @property DateTime          $updatedTime
 * @property int|NULL          $commentsCount
 * @property int|NULL          $likesCount
 * @property string            $fromName
 * @property int               $fromId
 * @property string            $type     {enum self::TYPE_*}
 * @property string|NULL       $link
 * @property string|NULL       $name
 * @property string|NULL       $caption
 * @property string|NULL       $description
 * @property string|NULL       $picture
 * @property string|NULL       $source
 *
 * @property ManyHasMany|Tag[] $tags     {m:n TagsRepository primary}
 * @property OneHasMany|Post[] $comments {1:m PostsRepository $parent}
 */
class Post extends Orm\Entity\Entity
{

	const TYPE_STATUS = 'status';
	const TYPE_VIDEO = 'video';
	const TYPE_LINK = 'link';
	const TYPE_PHOTO = 'photo';

	/**
	 * @var Tags
	 * @inject
	 */
	public $tagParser;

	/**
	 * @return string[][] [string[] $cleanTags, string[] $originalTags]
	 */
	public function getParsedTags()
	{
		return $this->tagParser->extractTags($this->message);
	}

	/**
	 * @return string[]
	 */
	public function getMessageWithoutTags()
	{
		return Strings::trim($this->tagParser->separateMessage($this->message)[1]);
	}

}
