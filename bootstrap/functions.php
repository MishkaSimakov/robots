<?php

function robotsrequest() {

    $uri = trim($_SERVER['REQUEST_URI'], '/');

    robotsController($uri);
}

function robotsController($key) {
    global $routes;

    if (array_key_exists($key, $routes)) {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $routes[$key];
    } else {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $routes['404'];
    }
}