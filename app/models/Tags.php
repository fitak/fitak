<?php

use Fitak\Tag;
use Nette\Utils\Strings;

class Tags extends BaseModel
{

	public function saveTag($tagName, $postId)
	{
		$tag = $this->orm->tags->getByNameOrCreate($tagName);
		$tag->posts->add($postId);
		$this->orm->tags->persistAndFlush($tag);
	}

	// extract tags ([tag1][tag2]....) from the start of input
	// return array(cleanTags, originalTags)
	public function extractTags($input)
	{
		$matches = Strings::match($input, '/^\s*(?<tag_list>\[\s*[\pL\d._-]+\s*\](?:\s*(?&tag_list))?)/u');

		if ($matches)
		{
			$tags = Strings::trim($matches['tag_list'], '[] ');
			$tags = Strings::split($tags, '/\]\s*\[/');
			$tags = [array_map('Nette\Utils\Strings::webalize', $tags), $tags];
		}
		else
		{
			$tags = [];
		}

		return $tags;
	}

}
