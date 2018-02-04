<?php
/*
This is the Router files and handles teh routing of the system.
*/
class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];


    /*
        This method loads a file    
    */
    public static function load($file)
    {
        $router = new static;
       
        require $file;

        return $router;
    }


    /* 
    This method loads a routes controller using the get method
    */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /* 
    This method loads a routes controller using the post method
    */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    
    
    /* 
    This method defines a route
    */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    
    /* 
        This method loads the route in the required method and uri
    */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No Route defined for this URI !');
    }
}