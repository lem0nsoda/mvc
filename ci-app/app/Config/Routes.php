<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Standard-Route (Startseite)
$routes->get('/', 'Menu::showContent');

// Definierte Routen für Menu
$routes->get('menu/showContent', 'Menu::showContent');
$routes->get('menu/showAllContent', 'Menu::showAllContent');
