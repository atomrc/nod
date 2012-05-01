<?php

require_once "lib/base.php";
require_once "controllers/home.php";
require_once "controllers/poi.php";
require_once "controllers/park.php";
require_once "controllers/activity.php";

require_once "config.php";

#Defining all the routes of the application 
F3::route('GET /','home::index');
F3::route('POST /getActivities', 'activity::compute');
F3::route('GET /getActivities', 'activity::compute'); //XXX For debug purpose only



#API routes 
# need to create a controller and a route for each resource of the application
//F3::route('GET /api/poi','poi::specific');
//F3::route('GET /api/poi/@id','poi::show');
//F3::route('GET /api/parks','parks::all');
//F3::route('GET /api/parks/@id','park::show');

F3::run();
?>
