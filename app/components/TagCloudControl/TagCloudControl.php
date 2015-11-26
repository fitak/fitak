<?php

namespace Fitak;

use Nette\Application\UI;


class TagCloudControl extends UI\Control
{

	/** @var array */
	private $trendingTags;

	public function __construct(array $trendingTags)
	{
		parent::__construct();
		$this->trendingTags = $trendingTags;
	}

	public function render()
	{
		$this->template->setFile(__DIR__ . '/TagCloudControl.latte');
		$this->template->tagCloud = $this->getTagCloud();
		$this->template->render();
	}

	private function getTagCloud()
	{
		$tagCloud = [];

		if ($this->trendingTags)
		{
			$maximum = $this->trendingTags[0]->toArray()['count'];
			foreach ($this->trendingTags as $tag)
			{
				if ($tag->name === 'mute') continue;
				$tagCloud[] = [
					'name' => $tag->name,
					'size' => round(1 + ($tag->count * 100) / $maximum * 0.015, 1),
				];
			}

			usort($tagCloud, function ($a, $b) {
				return strcmp($a['name'], $b['name']);
			});
		}

		return $tagCloud;
	}

}
