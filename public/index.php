<?php

use Maha\Core\IoC;

//todo: move more settings into bootstrap or create a start.php to utilize

/** Bootstrap the app */

require '../src/Maha/bootstrap.php';

/** Create the app from the IoC container */
$app = IoC::make('app');

/** Run the app */
$app->run();
