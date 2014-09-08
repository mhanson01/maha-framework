<?php namespace Maha\Core;

/**
 * Class IoC
 *
 * @package Maha\Core
 */
class IoC {

    /**
     * @var array
     */
    protected static $registry = [];

    /**
     * @param          $name
     * @param callable $resolver
     */
    public static function bind($name, Callable $resolver)
    {
        static::$registry[$name] = $resolver;
    }

    /**
     * @param $name
     * @return mixed
     * @throws Exception
     */
    public static function make($name)
    {
        if (isset(static::$registry[$name]))
        {
            $resolver = static::$registry[$name];

            return $resolver();
        }

        throw new Exception('Alias does not exist in the IoC registry.');
    }

} 