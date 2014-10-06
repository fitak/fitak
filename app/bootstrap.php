<?php

// Fix tmp issues when app is invoked by server but
// custom utils scripts are called by cron or user.
umask(0);

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;
$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../tmp');
$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->addDirectory(__DIR__ . '/../bin')
	->register();
$configurator->addConfig(__DIR__ . '/config/common.neon');
$configurator->addConfig(__DIR__ . '/config/local.neon');
$container = $configurator->createContainer();


return $container;
