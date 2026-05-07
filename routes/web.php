<?php

/** @var Router $router */

$router->get('/', 'home.php');
$router->get('/commercial', 'commercial.php');
$router->get('/commercial/specialist', 'commercial_specialist.php');
$router->get('/developers', 'developers.php');
$router->get('/residential', 'residential.php');
$router->get('/residential/solar-reroof', 'solar_reroof.php');
$router->get('/residential/custom', 'custom_residential.php');
$router->get('/agricultural', 'agricultural.php');
$router->get('/bipv', 'bipv.php');
$router->get('/contact', 'contact.php');
