<?php

require_once "controllers/home.php";
require_once "controllers/park.php";
require_once "lib/base.php";

#Defining all the routes of the application 
F3::route('GET /','home::index');


#API routes 
# need to create a controller and a route for each resource of the application
F3::route('GET /api/parks','park::index');
F3::route('GET /api/parks/@id','park::show');

F3::run();
?>