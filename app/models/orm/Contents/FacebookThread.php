<?php

namespace Fitak;

use DateTime;
use Nette\Utils\Strings;
use Nextras\Orm;
use Nextras\Orm\Relationships\OneHasMany;
use Nextras\Orm\Relationships\ManyHasMany;
use Tags;


/**
 * @property string                       $threadType  {enum self::TYPE_*}
 * @property string|NULL                  $link
 * @property string|NULL                  $name
 * @property string|NULL                  $caption
 * @property string|NULL                  $description
 * @property string|NULL                  $picture
 * @property string|NULL                  $source
 */
class FacebookThread extends FacebookContent
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
	 * @return string
	 */
	public function getMessageWithoutTags()
	{
		return Strings::trim($this->tagParser->separateMessage($this->message)[1]);
	}

}
