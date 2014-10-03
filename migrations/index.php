<?php

/** @var SystemContainer $container */
$container = require __DIR__ . '/../app/bootstrap.php';

/** @var Nette\Database\Context $dbContext */
$dbContext = $container->getByType(Nette\Database\Context::class);

/** @var Nextras\Migrations\IDriver $driver */
$driver = $container->getByType(Nextras\Migrations\IDriver::class);

$controllerClass = 'Nextras\\Migrations\\Controllers\\' . (PHP_SAPI === 'cli' ? 'Console' : 'Http') . 'Controller';
$controller = new $controllerClass($driver);
$controller->addGroup('structures', __DIR__ . '/structures');
$controller->addGroup('basic-data', __DIR__ . '/basic-data', ['structures']);
$controller->addGroup('dummy-data', __DIR__ . '/dummy-data', ['basic-data']);
$controller->addExtension('sql', new Nextras\Migrations\Extensions\NetteDbSql($dbContext));

$controller->run();
