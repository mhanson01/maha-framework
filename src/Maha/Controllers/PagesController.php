<?php namespace Maha\Controllers;
use Maha\Core\Router;

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

    public function sitemap()
    {
        $pages = array_keys(Router::$routes['GET']);
        $url = url();

        header("Content-type: text/plain");

        return $this->viewer->render('sitemap.twig', compact('pages','url'));
    }

} 