<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Kdyby\Facebook\Dialog;

use Kdyby\Facebook;
use Nette;



/**
 * @author Filip Procházka <filip@prochazka.su>
 */
class LoginDialog extends Facebook\Dialog\AbstractDialog
{
	/**
	 * @var string
	 */
	private $scope;

	/**
	 * @var string
	 */
	private $authType;



	/**
	 * Facebook get's the url for this handle when redirecting to login dialog.
	 * It automatically calls the onResponse event.
	 */
	public function handleResponse()
	{
		$this->facebook->getUser(); // invoke reading of token
		parent::handleResponse();
	}



	/**
	 * Checks, if there is a user in storage and if not, it redirects to login dialog.
	 * If the user is already in session storage, it will behave, as if were redirected from facebook right now,
	 * this means, it will directly call onResponse event.
	 *
	 * @see https://developers.facebook.com/docs/facebook-login/login-flow-for-web/v2.1
	 * @param string $authType
	 */
	public function handleOpen($authType = NULL)
	{
		$this->authType = $authType;
		if (!$this->facebook->getUser() || $this->authType) { // no user
			$this->open();
		}

		$this->onResponse($this);
		$this->presenter->redirect('this');
	}



	/**
	 * @see https://developers.facebook.com/docs/facebook-login/permissions/v2.1
	 * @param string|array $scope
	 */
	public function setScope($scope)
	{
		$this->scope = implode(',', (array)$scope);
	}



	/**
	 * @return array
	 */
	public function getQueryParams()
	{
		// CSRF
		$this->facebook->session->establishCSRFTokenState();

		// basic params
		$params = array(
			'state' => $this->facebook->session->state,
			'client_id' => $this->facebook->config->appId,
			'redirect_uri' => (string)$this->currentUrl,
			'cancel_url' => (string)$this->currentUrl,
		);

		// scope of rights
		if ($this->scope) {
			$params['scope'] = implode(',', (array) $this->scope);

		} elseif ($scope = $this->facebook->config->permissions) {
			$params['scope'] = implode(',', (array)$scope);
		}

		// authType
		if ($this->authType) {
			$params['auth_type'] = implode(',', (array) $this->authType);

		}

		return $params;
	}



	/**
	 * @param string $display
	 * @param bool $showError
	 * @return string
	 */
	public function getUrl($display = NULL, $showError = FALSE)
	{
		return (string)$this->facebook->config->createUrl(
			'www',
			'dialog/oauth',
			$this->getQueryParams()
		);
	}

}
