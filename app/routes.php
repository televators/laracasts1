<?php

// This doesn't afford request-type-based manipulation. Rewrite!
// $router->define([
// 	'' => 'controllers/index.php',
// 	'about' => 'controllers/about.php',
// 	'about/culture' => 'controllers/coffee.php',
// 	'contact' => 'controllers/contact.php',
// 	'names' => 'controllers/add-name.php'
// ]);

// GET Routes
$router->get("", "PageController@index");
$router->get("about", "PageController@about");
$router->get("coffee", "PageController@coffee");
$router->get("contact", "PageController@contact");
$router->get( "users", "UserController@index" );

// POST Routes
$router->post("users", "UserController@store");
