<?php

namespace Bin\Commands\Elastic;

use Bin\Commands\Command;
use ElasticSearch;
use Fitak\ElasticSearchUpdater;
use Nette\Database\Context as Database;
use Symfony\Component\Console\Helper\ProgressBar;
use Tags;


class Reindex extends Command
{

	protected function configure()
	{
		$this->setName('elastic:reindex')
			->setAliases(['es:reindex'])
			->setDescription('Drops current index, sets new mapping and add all data to index');
	}

	public function invoke(ElasticSearch $elastic, Database $db, Tags $tagParser)
	{
		$this->out->writeln('<info>Erasing index...</info>');
		$elastic->setupIndices();
		$this->out->writeln('<info>Mapping recreated</info>');

		$this->out->writeln('<info>Indexing...</info>');

		$rows = $db->query('
			SELECT
				`id`, `message`, `group_id`, `likes`, `description`, `caption`,
				If(`parent_id` IS NULL, 1, 0) `is_topic`,
				Unix_Timestamp(`created_time`) `timestamp`,
				`from_name`
			FROM `data`
		');

		$pb = new ProgressBar($this->out, $rows->getRowCount());
		$pb->start();

		$flushCounter = 0;
		$data = [];
		foreach ($rows as $row)
		{
			$message = trim(implode(' ', [
				$tagParser->separateMessage($row['message'])[1],
				$row['description'],
				$row['caption'],
			]));
			$data[] = [
				'tags' => $tagParser->extractTags($row['message'])[0],
				'message' => $message,
				'message_raw' => $row['message'],
				'likes' => $row['likes'],
				'author' => $row['from_name'],
				'is_topic' => $row['is_topic'],
				'created_time' => $row['timestamp'],
				'group' => $row['group_id'],
			];

			$pb->advance();

			if (++$flushCounter > 200)
			{
				$elastic->addToIndexBulk(ElasticSearch::TYPE_CONTENT, $data);
				$data = [];
				$flushCounter = 0;
			}
		}
		if ($data)
		{
			$elastic->addToIndexBulk(ElasticSearch::TYPE_CONTENT, $data);
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
