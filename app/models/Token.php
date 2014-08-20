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

	public function getToken()
	{
		$result = $this->db->query("SELECT token, expiration
                                    FROM tokens
                                    WHERE expiration > %t LIMIT 1", new DateTime);
		if (!count($result))
		{
			return NULL;
		}

		return $result->fetchSingle();
	}

	public function saveToken($token, $date)
	{
		$arr = [
			'token' => $token,
			'expiration' => $date,
		];
		$this->db->query('TRUNCATE tokens');
		$this->db->query('INSERT INTO tokens', $arr);
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

	public function checkAccess($ip)
	{
		$result = $this->db->query("SELECT id
                                    FROM ip
                                    WHERE ip = %s", $ip);
		if (count($result))
		{
			return TRUE;
		}

		return FALSE;
	}

}
