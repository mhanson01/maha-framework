<?php  namespace Maha\Controllers;

class AppController extends BaseController {

    public function config()
    {
        return $this->viewer->render('app/config.twig');
    }

    public function updateConfig()
    {
        return $this->config();
    }

} 