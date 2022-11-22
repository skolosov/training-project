<?php

global $router;

function router(string $url, Closure $callback)
{
    global $router;
    $route = trim($url, "\t\n\r\0\x0B");
    //$route = $url === '/'
    //    ? '/'
    //    : preg_replace('/\/{0,}$/', '', $route);

    if ($url === '/') {
        $route = '/';
    }
    else {
        $route = preg_replace('/\/{0,}$/', '', $route);
    }
    $router[$route] = $callback;
}

function dispatch($url)
{
    global $router;
    $route = trim($url, "\t\n\r\0\x0B");
    $route = $url === '/'
        ? '/'
        : preg_replace('/\/{0,}$/', '', $route);
    return isset($router[$route])
        ? $router[$route]()
        : require_once "pages/error.php";
}