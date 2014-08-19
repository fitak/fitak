<?php

// Fix tmp issues when app is invoked by server but
// custom utils scripts are called by cron or user.
umask(0);

require LIBS_DIR . '/autoload.php';

$configurator = new Nette\Configurator;
$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../tmp');
$configurator->createRobotLoader()->addDirectory(APP_DIR)->register();
$configurator->addConfig(__DIR__ . '/config/config.neon', $configurator::AUTO);
$container = $configurator->createContainer();


return $container;
