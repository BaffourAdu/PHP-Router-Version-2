<?php

/*
This page laods first when the website is accesed.
It Gets the uri and the method the uri is been requested
*/


//Including Composer Autoload to initialize all classes
require 'vendor/autoload.php';
//This includes the boostrap file which loads all the reuired files
require 'core/bootstrap.php';




/* 
This loads the routes file, 
gets the the uri and the method of request and 
refernces it with the routes file to get its route
and loads the route
*/
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
