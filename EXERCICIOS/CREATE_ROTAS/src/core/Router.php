<?php 

namespace myApp\core\Router;

class Router{
    protected $routes = [
        'POST' => [],
        'GET' => []
    ];

    public function get($controller, $uri){
        return $this->routes['GET'][$uri] = $controller;
    }
    public function post($controller, $uri){
        return $this->routes['POST'][$uri] = $controller;
    }
    public static function load($route){
        $file = new static;
        require $file;
        require $route;
    }
    public function show($uri, $method){
        $uri = strtolower($uri);
            
        if(array_key_exists($uri, $this->routes[$method])){
            $this->call_method(...explode("@",$this->routes[$method][$uri]));
        }
    }
    public static function call_method($controller, $action){
        $class_controller = "MyApp\\controllers\\$controller";
        $class = new $class_controller;
        $class->$action;
    }

}

