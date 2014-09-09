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
     * todo: utilize variable for template directory
     * todo: possibly use IoC::make for twig?
     */
    function __construct()
    {
        \Twig_Autoloader::register();

        $loader = new \Twig_Loader_Filesystem(__DIR__.'/../../../templates');

        $twig = new \Twig_Environment($loader);

        $this->viewer = $twig;
    }

    public function notFound()
    {
        http_response_code(404);

        return $this->viewer->render('/errors/404.twig');
    }
}