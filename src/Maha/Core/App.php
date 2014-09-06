<?php namespace Maha\Core;

/**
 * Class App
 *
 * @package Maha\Core
 */
class App {

    /**
     * @var
     */
    public $router;

    /**
     *
     */
    function __construct()
    {
        $this->responder = new Responder();
    }

    /**
     *
     */
    public function run()
    {
        echo $this->responder->run();
    }


} 