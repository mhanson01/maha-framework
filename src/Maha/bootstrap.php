<?php


require 'routes.php';

// todo: create global file to load configuration and site variables
//require 'global.php';
// todo: create helpers file
//require 'helpers.php';

use Maha\Core\App;
use Maha\Core\IoC;
use Maha\Core\Router;

IoC::bind('app', function()
{
    return new App(Router::Instance());
});