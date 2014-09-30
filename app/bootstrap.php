<?php

use Nette\Application\Routers\Route;
use Nette\DI\CompilerExtension;

// Load Composer Autoloader
require LIBS_DIR . '/autoload.php';

// Configure application
$configurator = new Nette\Configurator;

// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode($configurator::AUTO);
$configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../tmp');
$configurator->createRobotLoader()
        ->addDirectory(APP_DIR)
        ->register();

// Create Dependency Injection container from config.neon file
$configurator->addConfig(__DIR__ . '/config/config.neon', $configurator::AUTO);
$container = $configurator->createContainer();


// Setup router
$container->router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
$container->router[] = new Route('stream/', 'Search:stream');
if ($configurator->isDebugMode())
{
	$container->router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
}
else
{
	$container->router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default', Route::SECURED);
}

return $container;
