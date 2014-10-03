#!/usr/bin/env php
<?php

use Nette\DI\Container;

/** @var Container $container */
$container = require __DIR__ . '/../app/bootstrap.php';

/** @var ElasticSearch $es */
$es = $container->getByType(ElasticSearch::class);

$es->setupIndices();
echo "Indices recreated\n";

/** @var Nette\Database\Context $db */
$db = $container->getByType(Nette\Database\Context::class);
$db->getConnection()->getPdo()->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, FALSE);

$res = $db->query('
	SELECT
		`id`, `message`, `group_id`, `likes`,
		If(`parent_id` IS NULL, 1, 0) `is_topic`,
		Unix_Timestamp(`created_time`) `timestamp`,
		`from_name` `author`
	FROM `data`
');

foreach ($res as $row)
{
	$es->addToIndex(ElasticSearch::TYPE_CONTENT, $row['id'], [
		'message' => $row['message'],
		'author' => $row['author'],
		'is_topic' => (bool) $row['is_topic'],
		'created_time' => $row['timestamp'],
		'group' => $row['group_id'],
		'likes' => $row['likes'],
	]);
}

$c = count($res);
echo "$c rows reindexed\n";
echo round(memory_get_peak_usage() / 1024 / 1024, 2) . " MB used\n";
