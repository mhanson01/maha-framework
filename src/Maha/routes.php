<?php

/**
 * Routes configuration
 */

use Maha\Core\Router;

$router = Router::Instance();

$router->get('/', 'PagesController@home');
$router->post('/', 'PagesController@home');

$router->get('/sitemap.txt', 'PagesController@sitemap');
