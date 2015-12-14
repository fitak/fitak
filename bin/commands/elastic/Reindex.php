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
				`id`, `message`, `group_id`, `description`, `caption`,
				If(`parent_id` IS NULL, 1, 0) `is_topic`, `user`,
				Unix_Timestamp(`updated_time`) `timestamp`
			FROM `data`
		');

		$pb = new ProgressBar($this->out, $rows->getRowCount());
		$pb->start();

		$flushCounter = 0;
		$data = [];
		foreach ($rows as $row)
		{
			$addons = trim(implode(' ', [
				$row['description'],
				$row['caption'],
			]));

			$user = $db->query('
			SELECT
				`id`, `fb_id`, `name`, `profile_picture`
			FROM `users`
			WHERE `id`=10'
			)->fetch();

			$data[] = [
				'id' => $row['id'],
				'tags' => $tagParser->extractTags($row['message'])[0],
				'message' => $tagParser->separateMessage($row['message'])[1],
				'message_addons' => $addons,
				'author' => $user['name'],
				'is_topic' => $row['is_topic'],
				'updated_time' => $row['timestamp'],
				'group' => $row['group_id'],
				'profile_picture' => $user['profile_picture'],
				'user_fb_id' => $user['fb_id']
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
