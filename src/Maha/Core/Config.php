<?php namespace Maha\Core;

class Config {

    /**
     * @var FileLoader
     */
    private $fileManager;

    protected $paths = [];

    function __construct(FileManager $fileManager)
    {
        $this->fileManager = $fileManager;

        $this->paths[] = base_path();
        $this->paths[] = config_path();
        // add additional paths to looks for configuration files here

        $this->loadEnv();
    }

    public function get($filename, $key)
    {
        $filename = config_path() . '/'. $filename . '.php';

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
            $_ENV[$key] = $value;
        }
    }

}