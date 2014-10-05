<?php

namespace Bin\Commands\Elastic;

use Bin\Commands\Command;
use ElasticSearch;
use Nette\Database\Context as Database;
use Symfony\Component\Console\Helper\ProgressBar;


class Reindex extends Command
{

	protected function configure()
	{
		$this->setName('elastic:reindex')
			->setAliases(['es:reindex'])
			->setDescription('Drops current index, sets new mapping and add all data to index');
	}

	public function invoke(ElasticSearch $elastic, Database $db)
	{
		$this->out->writeln('<info>Erasing index...</info>');
		$elastic->setupIndices();
		$this->out->writeln('<info>Mapping recreated</info>');

		$res = $db->query('
			SELECT
				`id`, `message`, `group_id`, `likes`,
				If(`parent_id` IS NULL, 1, 0) `is_topic`,
				Unix_Timestamp(`created_time`) `timestamp`,
				`from_name` `author`
			FROM `data`
		');

		$this->out->writeln('<info>Indexing...</info>');
		$pb = new ProgressBar($this->out, $res->getRowCount());
		$pb->start();
		foreach ($res as $row)
		{
			$elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $row['id'], [
				'message' => $row['message'],
				'author' => $row['author'],
				'is_topic' => (bool) $row['is_topic'],
				'created_time' => $row['timestamp'],
				'group' => $row['group_id'],
				'likes' => $row['likes'],
			]);
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
