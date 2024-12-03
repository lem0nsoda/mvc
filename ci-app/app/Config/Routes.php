<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('menu/showContent', 'MenuController::showContent');
$routes->get('menu/showAllContent', 'MenuController::showAllContent');


