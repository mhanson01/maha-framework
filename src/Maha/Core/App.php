<?php namespace Maha\Core;

/**
 * Class App
 *
 * @package Maha\Core
 */
class App {

    /**
     * @var router singleton instance
     */
    public $router;

    /**
     * @param Router $router
     */
    function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Run the main App
     */
    public function run()
    {
        echo $this->router->run();
    }


} 