<?php namespace Maha\Controllers;

use Maha\Core\IoC;

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
        $this->viewer = IoC::make('viewer');
    }

    public function notFound()
    {
        http_response_code(404);

        return $this->viewer->render('/errors/404.twig');
    }
}