<?php namespace Maha\Controllers;

/**
 * Class PagesController
 *
 * @package Maha\Controllers
 */
class PagesController extends BaseController {

    /**
     * @return string
     */
    public function home()
    {
        return $this->viewer->render('index.twig');
    }

} 