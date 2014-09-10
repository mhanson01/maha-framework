<?php namespace Maha\Exceptions;

/**
 * Class ExceptionHandler
 *
 * @package Maha\Exceptions
 */
class ExceptionHandler {

    /**
     * Custom handle method for exceptions
     *
     * @param \Exception $e
     */
    public static function handle(\Exception $e)
    {
        //todo: need to expand on the default
        echo 'exception! ';
        echo $e->getMessage();
        exit;
    }

} 