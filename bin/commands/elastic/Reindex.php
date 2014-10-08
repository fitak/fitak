<?php

namespace Bin\Commands\Elastic;

use Bin\Commands\Command;
use ElasticSearch;
use Fitak\ElasticSearchUpdater;
use Fitak\RepositoryContainer;
use Symfony\Component\Console\Helper\ProgressBar;


class Reindex extends Command
{

	protected function configure()
	{
		$this->setName('elastic:reindex')
			->setAliases(['es:reindex'])
			->setDescription('Drops current index, sets new mapping and add all data to index');
	}

	public function invoke(ElasticSearch $elastic, RepositoryContainer $orm, ElasticSearchUpdater $updater)
	{
		$this->out->writeln('<info>Erasing index...</info>');
		$elastic->setupIndices();
		$this->out->writeln('<info>Mapping recreated</info>');

		$this->out->writeln('<info>Indexing...</info>');
		$posts = $orm->posts->findAll();

		$pb = new ProgressBar($this->out, $posts->count());
		$pb->start();
		foreach ($posts as $post)
		{
			$updater->onAfterInsert($post);
			$pb->advance();
		}
		$pb->finish();
		$this->out->writeln(''); // fix progress bar not breaking line

		$this->out->writeln('<info>All rows indexed</info>');
		if ($this->out->isVerbose())
		{
			$this->out->writeln(round(memory_get_peak_usage() / 1024 / 1024, 2) . ' MB used');
		}
	}

}
