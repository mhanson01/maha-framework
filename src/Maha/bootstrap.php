<?php

require '../vendor/autoload.php';

set_exception_handler(['Maha\Exceptions\ExceptionHandler','handle']);

require routes_file();

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

IoC::bind('viewer', function()
{
    \Twig_Autoloader::register();

    $loader = new \Twig_Loader_Filesystem( templates_path() );

    $twig = new \Twig_Environment($loader);

    return $twig;
});