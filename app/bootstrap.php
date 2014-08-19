<?php

use Nette\Application\Routers\Route;
use Nette\DI\CompilerExtension;

// Fix tmp issues when app is invoked by server but
// custom utils scripts are called by cron or user.
umask(0);

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


return $container;
