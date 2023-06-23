<?php

namespace Core;

class Router
{
    protected $routes = [];
    protected $query;

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];

        return $this;
    }
    
    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function route($uri){

        foreach ($this->routes as $route) {
            if($route['uri'] == $uri){
                return require base_path($route['controller']);
            }
        }
    }
}
