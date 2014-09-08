<?php

/**
 * Routes configuration
 */

use Maha\Core\Router;

$router = Router::Instance();

$router->get('/test', 'PagesController@home');