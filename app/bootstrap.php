<?php

/**
 * My Application bootstrap file.
 */
use Nette\Application\Routers\Route;


// Load Nette Framework
require LIBS_DIR . '/Nette/loader.php';


// Configure application
$configurator = new Nette\Config\Configurator;

// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode($configurator::AUTO);
$configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../tmp');
$configurator->createRobotLoader()
        ->addDirectory(APP_DIR)
        ->addDirectory(LIBS_DIR)
        ->register();

// dibi
$configurator->onCompile[] = function($configurator, $compiler) {
        $compiler->addExtension('dibi', new DibiNetteExtension);
};

// Create Dependency Injection container from config.neon file
$configurator->addConfig(__DIR__ . '/config/config.neon');
$container = $configurator->createContainer();


// Setup router
$container->router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
$container->router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');


// Configure and run the application!
$container->application->run();
