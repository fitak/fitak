<?php
// uncomment this line if you must temporarily take down your site for maintenance
// require __DIR__ . '/../app/templates/maintenance.phtml';

$container = require __DIR__ . '/../app/bootstrap.php';
$container->application->run();
