<?php  namespace Maha\Core;
use Maha\Controllers\PagesController;

/**
 * Class Router
 *
 * @package Maha\Core
 */
final class Router {

    /**
     * @var array
     */
    public static $routes = [];
    /**
     * @var
     */
    private $request;

    /**
     * Private constructor to prevent new instances
     *
     * @param Request $request
     */
    private function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    public static function Instance()
    {
        static $instance = null;

        if ($instance === null)
        {
            $instance = new Router(new Request);
        }

        return $instance;
    }

    /**
     * Append new route onto GET array
     *
     * @param $uri
     * @param $controllerMethod
     */
    public static function get($uri, $controllerMethod)
    {
        static::$routes['GET'][$uri] = $controllerMethod;
    }

    /**
     * Append new route onto POST array
     *
     * @param $uri
     * @param $controllerMethod
     */
    public static function post($uri, $controllerMethod)
    {
        static::$routes['POST'][$uri] = $controllerMethod;
    }

    /**
     * Run the router
     * todo: break into smaller pieces and make it readable
     */
    public function run()
    {
        if( $this->routeExists($this->request) )
        {
            list($controllerName, $methodName) = explode('@', static::$routes[$this->request->method][$this->request->uri]);
        }
        else
        {
            $controller = new PagesController();

            return $controller->notFound();
        }

        if( ! class_exists('Maha\Controllers\\'.$controllerName))
        {
            echo 'couldnt find controller class';
            exit;
        }

        if( ! method_exists('Maha\Controllers\\'.$controllerName, $methodName))
        {
            echo 'couldnt find method on class';
            exit;
        }

        $controller = 'Maha\Controllers\\'.$controllerName;
        $response = new $controller;

        return $response->$methodName();
    }

    /**
     * @param $request
     * @return bool
     */
    public function routeExists($request)
    {
        if (isset(static::$routes[$request->method][$request->uri]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

} 