<?php
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

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
		$router[] = new Route('index.php', 'Homepage:default', $flags | Route::ONE_WAY);
		$router[] = new Route('stream/', 'Search:stream', $flags);
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default', $flags);

		return $router;
	}
}
