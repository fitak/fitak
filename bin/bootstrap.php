#!/usr/bin/env php
<?php

// absolute filesystem path to this web root
define('WWW_DIR', __DIR__ . '/../fitak.cz');

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/../app');

// absolute filesystem path to the libraries
define('LIBS_DIR', WWW_DIR . '/../libs');

return require APP_DIR . '/bootstrap.php';
