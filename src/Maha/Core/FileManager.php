<?php namespace Maha\Core;

class FileManager {

    /**
     * Load a file and return the loaded array
     *
     * @param $filename
     * @return mixed
     */
    public function load($filename)
    {
        return require $filename;
    }

} 