<?php

class Router {
    protected $routes = [];

    public function get($uri, $action) {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action) {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch($uri, $method) {
        if (array_key_exists($uri, $this->routes[$method])) {
            $action = $this->routes[$method][$uri];
            
            // If the action is a simple view file name (e.g., 'home.php')
            if (is_string($action) && strpos($action, '.php') !== false) {
                $this->renderView($action, $uri);
            } 
            // If the action is a callback function
            else if (is_callable($action)) {
                call_user_func($action);
            }
        } else {
            $this->renderView('404.php', $uri);
        }
    }

    protected function renderView($view, $uri = '') {
        // Extract the slug (last URL segment) and make it available to views
        $segments = explode('/', trim($uri, '/'));
        $slug = end($segments);
        
        $viewPath = __DIR__ . '/../views/' . $view;
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "View not found: " . $view;
        }
    }
}
