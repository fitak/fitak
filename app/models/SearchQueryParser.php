<?php
use Nette\Utils\Strings;

class SearchQueryParser extends Nette\Object
{

	/** @var Tags */
	public $tagParser;

	public function __construct(Tags $tagParser)
	{
		$this->tagParser = $tagParser;
	}


	/**
	 * Parse search query.
	 *
	 * @param  string
	 * @return array associative array with keys 'query' and 'tags'
	 */
	public function parseQuery($input)
	{
		// normalize input
		$input = Strings::lower(Strings::trim($input));
		$input = Strings::replace($input, '/\s+/', ' ');

		// extract tags
		list($rawTags, $query) = $this->tagParser->separateMessage($input);
		$tags = $this->tagParser->parse($rawTags)[0];
		$matches = Strings::matchAll($query, '/(?<=^|\s)tag:\s*(?<tag_list>[\pL\d_-]+(?:\s*,\s*(?&tag_list))?)/u');

		foreach ($matches as $m)
		{
			$tmp = Strings::split($m['tag_list'], '/\s*,\s*/');
			$tmp = array_map('Nette\Utils\Strings::webalize', $tmp);
			$tmp = array_unique($tmp);
			$tags = array_merge($tags, $tmp);
			$query = str_replace($m[0], '', $query);
		}
		$query = Strings::trim($query) ?: NULL;

		return [
			'query' => $query,
			'tags' => $tags,
		];
	}

}
