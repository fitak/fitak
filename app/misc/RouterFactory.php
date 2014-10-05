<?php
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Nextras\Routing\StaticRouter;

class RouterFactory extends Nette\Object
{

	/** @var bool */
	private $useHttps;

	public function __construct($useHttps)
	{
		$this->useHttps = $useHttps;
	}

	/**
	 * @return \Nette\Application\IRouter
	 */
	public function create()
	{
		$flags = $this->useHttps ? Route::SECURED : 0;

		$router = new RouteList();
		$router[] = new StaticRouter(['Homepage:default' => 'index.php'], $flags | Route::ONE_WAY);
		$router[] = new StaticRouter(
			[
				'Search:stream' => 'stream/',
				'Auth:signIn' => 'sign-in',
				'Auth:signOut' => 'sign-out',
				'Auth:signUp' => 'sign-up',
				'Auth:signUpAfter' => 'sign-up-after',
				'Auth:signUpConfirm' => 'sign-up-confirm',
			],
			$flags
		);
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default', $flags);

		return $router;
	}
}
