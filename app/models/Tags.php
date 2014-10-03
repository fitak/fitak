<?php

use Nette\Utils\Strings;

class Tags extends BaseModel
{

	public function saveTag($tag, $message_id)
	{
		$result = $this->db->query("SELECT id FROM tags WHERE name = %s LIMIT 1", $tag);
		$id = $result->fetchSingle();
		if (!$id)
		{
			$args = [
				'name' => $tag,
				'count' => 1
			];
			$this->db->query("INSERT INTO tags", $args);
			$id = $this->db->insertId();
		}
		$args = [
			'tags_id' => $id,
			'data_id' => $message_id
		];
		$this->db->query("INSERT INTO data_tags", $args);
		$this->db->query("UPDATE tags SET count = count + 1 WHERE id = %i LIMIT 1", $id);
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
