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

    private $http_methods = [
        'GET',
        'POST',
        'PUT',
        'PATCH',
        'DELETE'
    ];

    /**
     *
     */
    function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        if( isset($_REQUEST['_method']) and in_array($_REQUEST['_method'], $this->http_methods) )
        {
            $this->method = $_REQUEST['_method'];
        }
        else
        {
            $this->method = $_SERVER['REQUEST_METHOD'];

        }
    }


} 