<?php
// cms/app/core/Router.php

class Router
{
    private $routes = [];

    public function addRoute($route, $controller, $method)
    {
        $this->routes[] = [
            'route' => $route,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function execute()
    {
        $current_route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
        $current_route = rtrim($current_route, '/');

        foreach ($this->routes as $route) {
            if ($current_route === $route['route']) {
                $controller = $route['controller'];
                $controller_instance = new $controller();
                $method = $route['method'];
                $controller_instance->$method();
                return;
            }
        }

        // 404 Not Found
        header("HTTP/1.0 404 Not Found");
        echo "Current route: " . $current_route;
    }
}
