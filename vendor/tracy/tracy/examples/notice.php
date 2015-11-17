<!DOCTYPE html><link rel="stylesheet" href="assets/style.css">

<h1>Tracy Notice and StrictMode demo</h1>

<?php

require __DIR__ . '/../src/tracy.php';

use Tracy\Debugger;


Debugger::enable(Debugger::DETECT, __DIR__ . '/log');
Debugger::$strictMode = TRUE;


function foo($from)
{
	echo $form;
}


foo(123);
