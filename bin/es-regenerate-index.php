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
		[id], [message], [group_id],
		If([parent_id] = 0, 1, 0) [is_topic],
		[from_name] [author]
	FROM [data] [d]
')->fetchAll();
foreach ($res as $row)
{
	$es->addToIndex(ElasticSearch::TYPE_CONTENT, $row['id'], [
		'message' => $row['message'],
		'author' => $row['author'],
		'is_topic' => (bool) $row['is_topic'],
		'group' => $row['group_id'],
	]);
}

$c = count($res);
echo "$c rows reindexed\n";
