<?php

/*
This file contains all the 
routes to their respective pages.

*/


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');
