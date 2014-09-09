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

        // todo: check for hidden variables to simulate put, patch, delete requests
        $this->method = $_SERVER['REQUEST_METHOD'];
    }


} 