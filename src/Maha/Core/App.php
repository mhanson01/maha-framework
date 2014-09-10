<?php namespace Maha\Core;

/**
 * Class App
 *
 * @package Maha\Core
 */
class App {

    /**
     * @var router instance
     */
    public $router;

    /**
     * @var FileManager
     */
    public $fileManager;

    /**
     * @var Config
     */
    public $config;

    /**
     * @param Router      $router
     * @param FileManager $fileManager
     * @param Config      $config
     */
    function __construct(Router $router, FileManager $fileManager, Config $config)
    {
        $this->router = $router;
        $this->fileManager = $fileManager;
        $this->config = $config;
    }

    /**
     * Run the main App
     */
    public function run()
    {
        echo $this->router->run();
    }


} 