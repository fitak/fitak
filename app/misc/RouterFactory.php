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
		$router = new RouteList();
		$router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);

		$flags = $this->useHttps ? [Route::ONE_WAY, Route::SECURED] : [0];
		foreach ($flags as $flag)
		{
			$router[] = new Route('stream/', 'Search:stream', $flag);
			$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default', $flag);
		}

		return $router;
	}
}
