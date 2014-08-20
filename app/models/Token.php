<?php


class Token extends BaseModel
{

	private $app_id, $permissions, $app_secret, $admin_email;

	public function __construct(DibiConnection $connection, $app_id, $permissions, $app_secret, $admin_email)
	{
		parent::__construct($connection);
		$this->app_id = $app_id;
		$this->permissions = $permissions;
		$this->app_secret = $app_secret;
		$this->admin_email = $admin_email;
	}

	public function getEmail()
	{
		return $this->admin_email;
	}

	/**
	 * Returns a valid token or FALSE if no valid token is available.
	 *
	 * @return string|FALSE
	 */
	public function getToken()
	{
		return $this->db->fetchSingle('
			SELECT token
			FROM tokens
			WHERE expiration > NOW()
			LIMIT 1
        ');
	}

	/**
	 * Saves new token to database.
	 *
	 * @param  string $token
	 * @param  DateTime $date
	 * @return void
	 */
	public function saveToken($token, DateTime $date)
	{
		$this->db->query('TRUNCATE tokens');
		$this->db->query('INSERT INTO tokens', [
			'token' => $token,
			'expiration' => $date,
		]);
	}

	public function getAppSecret()
	{
		return $this->app_secret;
	}

	public function getAppId()
	{
		return $this->app_id;
	}

	public function getAppPermissions()
	{
		return $this->permissions;
	}

	/**
	 * Checks if given IP address is whitelisted.
	 *
	 * @param  string $ip
	 * @return bool
	 */
	public function checkAccess($ip)
	{
		return (bool) $this->db->fetchSingle('
			SELECT COUNT(*)
			FROM ip
			WHERE ip = %s', $ip
		);
	}

}
