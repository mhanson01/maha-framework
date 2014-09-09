<?php

/**
 * Filename and Path Helpers
 */

if ( ! function_exists('getPaths'))
{
    /**
     * Load the paths array
     *
     * @return array
     */
    function getPaths()
    {
        return require 'paths.php';
    }
}

if ( ! function_exists('routes_file'))
{
    /**
     * Return the routes path
     *
     * @return mixed
     */
    function routes_file()
    {
        $paths = getPaths();

        return $paths['routes'];
    }
}

if ( ! function_exists('public_path'))
{
    /**
     * Return the public path
     *
     * @return mixed
     */
    function public_path()
    {
        $paths = getPaths();

        return $paths['public'];
    }
}

if ( ! function_exists('cache_path'))
{
    /**
     * Return the cache path
     *
     * @return mixed
     */
    function cache_path()
    {
        $paths = getPaths();

        return $paths['cache'];
    }
}

if ( ! function_exists('templates_path'))
{
    /**
     * Return the templates path
     *
     * @return mixed
     */
    function templates_path()
    {
        $paths = getPaths();

        return $paths['templates'];
    }
}

if ( ! function_exists('base_path'))
{
    /**
     * Return the base app path
     *
     * @return mixed
     */
    function base_path()
    {
        $paths = getPaths();

        return $paths['base'];
    }
}

/**
 * Miscellaneous helpers
 */

if ( ! function_exists('dd'))
{
    /**
     * Die and Dump output
     *
     * @param $output
     */
    function dd($output)
    {
        var_dump($output);
        die();
    }
}

if ( ! function_exists('str_random'))
{
    /**
     * Create random string
     *
     * @param int $length
     * @return string
     */
    function str_random($length = 32)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 10)), 0, $length);
    }
}

if ( ! function_exists('e'))
{
    /**
     * Run value through html entities with default settings
     *
     * @param $value
     * @return string
     */
    function e($value)
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
    }
}

/**
 * Configuration helpers
 */

function getConfig()
{
    return require 'config.php';
}

function url()
{
    $config = getConfig();

    return $config['url'];
}