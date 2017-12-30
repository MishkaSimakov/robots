<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 21.12.2017
 * Time: 19:46
 */

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])){

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('Нет такого маршрута');
    }
    protected function callAction($controller, $action)
    {
        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} не имеет метода {$action}"
            );
        }
        return (new $controller)->$action();
    }
}