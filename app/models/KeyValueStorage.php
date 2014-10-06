<?php

use Nette\Database\Context as Database;


class KeyValueStorage
{

	const FACEBOOK_ACCESS_TOKEN = 'facebook.access_token';
	const FACEBOOK_ACCESS_TOKEN_EXPIRES = 'facebook.access_token_expires';
	const CRAWLER_SINCE = 'crawler.since';

	/**
	 * @var Database
	 */
	private $db;

	public function __construct(Database $db)
	{
		$this->db = $db;
	}

	public function save($key, $value)
	{
		$this->db->query('
			INSERT INTO `key_value` (`key`, `value`) VALUES (?, ?)
			ON DUPLICATE KEY UPDATE `value` = ?
		', $key, (string) $value, $value);
	}

	/**
	 * @param string $key
	 * @return NULL|mixed
	 */
	public function get($key)
	{
		$row = $this->db->query('
			SELECT "x" AS `tmp`, `value` FROM `key_value` WHERE `key` = ?
		', $key)->fetchPairs('tmp', 'value');
		return isset($row['x']) ? $row['x'] : NULL;
	}

}
