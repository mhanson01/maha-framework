<?php namespace Maha\Core;

class FileManager {

    public function load($filename)
    {
        return require $filename;
    }

} 