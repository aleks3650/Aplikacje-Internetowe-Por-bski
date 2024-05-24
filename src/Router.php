<?php

namespace MyApp;

class Router {
    private $routes = [];

    public function add($path, $callback) {
        $this->routes[$path] = $callback;
    }

    public function dispatch($path) {
        if (array_key_exists($path, $this->routes)) {
            call_user_func($this->routes[$path]);
        } else {
            echo "404 Not Found";
        }
    }
}

?>
