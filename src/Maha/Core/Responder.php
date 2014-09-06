<?php namespace Maha\Core;

/**
 * Class Responder
 *
 * @package Maha\Core
 */
class Responder {

    /**
     * @var Request
     */
    public $request;

    /**
     * @var mixed
     */
    public $routes;

    /**
     *
     */
    function __construct()
    {
        $this->request = new Request();

        $this->routes = include __DIR__.'/../routes.php';
    }

    /**
     *
     */
    public function run()
    {
        $pieces = $this->parseUri();

        $viewName = $pieces[1];

        if( $this->routeExists($viewName) )
        {
            $c = explode('@', $this->routes[$viewName]);
        }

        if( ! class_exists('Maha\Controllers\\'.$c[1]))
        {
            echo 'couldnt find controller class';
            exit;
        }

        if( ! method_exists('Maha\Controllers\\'.$c[1], $c[0]))
        {
            echo 'couldnt find method on class';
            exit;
        }

        $controller = 'Maha\Controllers\\'.$c[1];
        $response = new $controller;

        echo $response->$c[0]();
    }

    /**
     * @return array
     */
    private function parseUri()
    {
        return explode('/', $this->request->uri);
    }

    /**
     * @param $viewName
     * @return bool
     */
    public function routeExists($viewName)
    {
        if (isset($this->routes[$viewName]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param $viewName
     * @return bool
     */
    private function viewExists($viewName)
    {
        if( is_file(__DIR__.'/../../../templates/'. $viewName . '.twig'))
        {
            return true;
        }

        return false;
    }





} 