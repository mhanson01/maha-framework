<?php namespace Maha\Exceptions;

class ExceptionHandler {

    public static function handle(\Exception $e)
    {
        //todo: need to expand on the default
        echo 'exception! ';
        echo $e->getMessage();
        exit;
    }

} 