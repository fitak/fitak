<?php

/** @var SystemContainer $container */
$container = require __DIR__ . '/../app/bootstrap.php';

$conn = $container->getByType(Nette\Database\Connection::class);
$dbal = new Nextras\Migrations\Bridges\NetteDatabase\NetteAdapter($conn);
$driver = new Nextras\Migrations\Drivers\MySqlDriver($dbal);

$controllerClass = 'Nextras\\Migrations\\Controllers\\' . (PHP_SAPI === 'cli' ? 'Console' : 'Http') . 'Controller';
$controller = new $controllerClass($driver);
$controller->addGroup('structures', __DIR__ . '/structures');
$controller->addGroup('basic-data', __DIR__ . '/basic-data', ['structures']);
$controller->addGroup('dummy-data', __DIR__ . '/dummy-data', ['basic-data']);
$controller->addExtension('sql', new Nextras\Migrations\Extensions\SqlHandler($driver));

$controller->run();
