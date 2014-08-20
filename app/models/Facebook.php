<?php


class Facebook extends BaseModel
{

	public function getToken()
	{
		session_start();
		$code = $_REQUEST["code"];

		if (empty($code))
		{
			$_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection
			$dialog_url = "https://www.facebook.com/dialog/oauth?client_id="
				. APP_ID . "&redirect_uri=" . urlencode(REDIRECT_URI) . "&scope=" . PERMISSIONS . "&state="
				. $_SESSION['state'];

			echo "<script> top.location.href='" . $dialog_url . "'</script>";
		}

		if ($_SESSION['state'] && ($_SESSION['state'] === $_REQUEST['state']))
		{
			$token_url = "https://graph.facebook.com/oauth/access_token?"
				. "client_id=" . APP_ID . "&redirect_uri=" . urlencode(REDIRECT_URI)
				. "&client_secret=" . APP_SECRET . "&code=" . $code;

			$response = file_get_contents($token_url);
			$params = NULL;
			parse_str($response, $params);

			$date = new DateTime();
			$date->add(new DateInterval('PT' . $params["expires"] . 'S'));
			$arr = [
				'token' => $params['access_token'],
				'expiration' => $date,
			];
			dibi::query('TRUNCATE tokens');
			dibi::query('INSERT INTO tokens', $arr);

			echo "Thanks for your token :)";
		}
		else
		{
			echo "The state does not match. You may be a victim of CSRF.";
		}
	}

}
