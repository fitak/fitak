<?php

namespace Bin\Commands\Crawler;

use Bin\Commands\Command;
use ElasticSearch;
use Fitak\Crawler\Edux as EduxCrawler;
use Symfony\Component\Console\Helper\ProgressBar;


class Edux extends Command
{

	protected function configure()
	{
		$this->setName('crawler:edux');
	}

	public function invoke(EduxCrawler $edux)
	{
		$courses = $edux->getCoursesUrls();

		$progress = new ProgressBar($this->out, count($courses));
		$progress->start();
		foreach ($courses as $course => $template)
		{
			$edux->processCourse($course, $template);
			$progress->advance();
		}
		$progress->finish();
		$this->out->writeln('');
	}

}
