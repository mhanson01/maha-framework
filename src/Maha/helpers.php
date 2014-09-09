<?php

function routes_path()
{
    $paths = getPaths();

    return $paths['routes'];
}

function public_path()
{
    $paths = getPaths();

    return $paths['public'];
}

function cache_path()
{
    $paths = getPaths();

    return $paths['cache'];
}

function templates_path()
{
    $paths = getPaths();

    return $paths['templates'];
}

function base_path()
{
    $paths = getPaths();

    return $paths['base'];
}

function getPaths()
{
    return require 'paths.php';
}