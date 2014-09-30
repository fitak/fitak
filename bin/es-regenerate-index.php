<?php

use Nette\DI\Container;

/** @var Container $container */
$container = require __DIR__ . '/bootstrap.php';

/** @var ElasticSearch $es */
$es = $container->getService('elasticSearch');

$es->setupIndices();
echo "Indices recreated\n";

/** @var DibiConnection $db */
$db = $container->getService('dibi.connection');
$res = $db->query('
	SELECT
		[id], [message], [group_id], [likes],
		If([parent_id] = 0, 1, 0) [is_topic],
		Unix_Timestamp([created_time]) [timestamp],
		[from_name] [author]
	FROM [data]
')->fetchAll();
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
