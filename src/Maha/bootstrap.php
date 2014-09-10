<?php

require '../vendor/autoload.php';

set_exception_handler(['Maha\Exceptions\ExceptionHandler','handle']);

require routes_file();

use Maha\Core\App;
use Maha\Core\IoC;
use Maha\Core\Router;

IoC::bind('app', function()
{
    $router = Router::Instance();

    $fileManager = new \Maha\Core\FileManager();

    $config = new \Maha\Core\Config(new \Maha\Core\FileManager());

    return new App($router, $fileManager, $config);
});

IoC::bind('viewer', function()
{
    \Twig_Autoloader::register();

    $loader = new \Twig_Loader_Filesystem( templates_path() );

    $twig = new \Twig_Environment($loader, [
        'cache' => cache_path(),
    ]);

    return $twig;
});