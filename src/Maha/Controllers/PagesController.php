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
        $header = 'It\'s working!!';

        return $this->viewer->render('index.twig', compact('header'));
    }

    public function notFound()
    {
        return $this->viewer->render('notFound.twig');
    }

} 