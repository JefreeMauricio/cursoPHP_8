<?php

class Router
{
    protected $routes = [];
    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function handle($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $controller =  $this->routes[$url][0];
            $method     =  $this->routes[$url][1];

           if (!class_exists($controller)) {
                throw new Exception("El controlador  {$controller} no existe");
            }

            if (!method_exists($controller, $method)) {
                throw new Exception("El método {$method} no existe en el controlador {$controller}");

            }


            return(new $controller)->$method(); //new $controller;
        
        } 

        die('la ruta no existe');
    }

}