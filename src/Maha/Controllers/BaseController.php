<?php namespace Maha\Controllers;

/**
 * Class BaseController
 *
 * @package Maha\Controllers
 */
class BaseController {

    /**
     * @var \Twig_Environment
     */
    public $viewer;

    /**
     *
     */
    function __construct()
    {
        \Twig_Autoloader::register();

        $loader = new \Twig_Loader_Filesystem(__DIR__.'/../../../templates');

        $twig = new \Twig_Environment($loader);

        $this->viewer = $twig;
    }
}