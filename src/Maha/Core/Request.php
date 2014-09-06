<?php namespace Maha\Core;

/**
 * Class Request
 *
 * @package Maha\Core
 */
class Request {

    /**
     * @var
     */
    public $uri;

    /**
     * @var string
     */
    public $method;

    /**
     *
     */
    function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];

        $this->method = 'GET';
    }


} 