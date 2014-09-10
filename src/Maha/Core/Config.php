<?php namespace Maha\Core;

/**
 * Class Config
 *
 * @package Maha\Core
 */
class Config {

    /**
     * @var FileLoader
     */
    private $fileManager;

    /**
     * Array of paths to look for config files
     *
     * @var array
     */
    protected $paths = [];

    /**
     * @param FileManager $fileManager
     */
    function __construct(FileManager $fileManager)
    {
        $this->fileManager = $fileManager;

        $this->paths[] = base_path();
        $this->paths[] = config_path();
        // add additional paths to looks for configuration files here

        $this->loadEnv();
    }

    /**
     * Load configuration value from config files
     *
     * @param $filename
     * @param $key
     * @return null
     */
    public function get($filename, $key)
    {
        foreach($this->paths as $path)
        {
            $full_filename = $path . '/' . $filename . '.php';

            if( is_file($full_filename) )
            {
                $config = $this->fileManager->load($full_filename);

                return $config[$key];
            }
        }

        return null;
    }

    /**
     * Load and set environment variables from .env.php
     */
    private function loadEnv()
    {
        $file = base_path() . '/.env.php';

        if( ! is_file($file) )
        {
            return false;
        }

        $vars = require $file;

        foreach($vars as $key => $value)
        {
            putenv($key.'='.$value);
        }
    }

}