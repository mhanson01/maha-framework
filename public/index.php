<?php

//todo: move more settings into bootstrap or create a start.php to utilize

/**
 * Autoload composer and run app
 */

use Maha\Core\IoC;

require '../vendor/autoload.php';

require '../src/Maha/bootstrap.php';

$app = IoC::make('app');

$app->run();
