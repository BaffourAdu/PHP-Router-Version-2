<?php

/*
This files contains all the necessary required files 
*/


//Bind the config file
App::bind('config', require 'config.php');

//Bind the database Query Builder
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
