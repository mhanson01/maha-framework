<?php

/**
 * Path Helpers
 */

/**
 * Load the paths array
 *
 * @return array
 */
function getPaths()
{
    return require 'paths.php';
}

/**
 * Return the routes path
 *
 * @return mixed
 */
function routes_path()
{
    $paths = getPaths();

    return $paths['routes'];
}

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