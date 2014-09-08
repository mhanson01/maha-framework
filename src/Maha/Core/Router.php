<?php  namespace Maha\Core;

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
     * Append new route onto array
     *
     * @param $uri
     * @param $controllerMethod
     */
    public static function get($uri, $controllerMethod)
    {
        static::$routes[$uri] = $controllerMethod;
    }

    /**
     * Run the router
     * todo: break into smaller pieces and make it readable
     */
    public function run()
    {
        if( $this->routeExists($this->request->uri) )
        {
            $controllerMethod = explode('@', static::$routes[$this->request->uri]);
            $controllerName = $controllerMethod[0];
            $methodName = $controllerMethod[1];
        }
        else
        {
            echo 'route not found';
            exit;
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
     * @param $uri
     * @return bool
     */
    public function routeExists($uri)
    {
        if (isset(static::$routes[$uri]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

} 