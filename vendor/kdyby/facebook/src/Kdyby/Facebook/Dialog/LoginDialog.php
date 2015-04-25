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
	 */
	public function handleOpen()
	{
		if (!$this->facebook->getUser()) { // no user
			$this->open();
		}

		$this->onResponse($this);
		$this->presenter->redirect('this');
	}



	/**
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
