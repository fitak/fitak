<?php

use Nette\Database\Context as Database;
use Nette\Utils\Json;


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
		$ser = Json::encode($value);
		$this->db->query('
			INSERT INTO `key_value` (`key`, `value`) VALUES (?, ?)
			ON DUPLICATE KEY UPDATE `value` = ?
		', $key, $ser, $ser);
	}

	/**
	 * @param string $key
	 * @return NULL|mixed
	 */
	public function get($key)
	{
		$row = $this->db->query('
			SELECT `value` FROM `key_value` WHERE `key` = ?
		', $key)->fetch();

		return $row ? Json::decode($row->value) : NULL;
	}

}
