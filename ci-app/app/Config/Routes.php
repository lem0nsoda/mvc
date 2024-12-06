<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Startseite
$routes->get('/', 'Menu::newContentUpload');

//Routen für Menu
$routes->get('menu/newContentUpload', 'Menu::newContentUpload');
$routes->get('menu/allContent', 'Menu::allContent');
$routes->get('menu/allSchedules', 'Menu::allSchedules');
$routes->get('menu/devices', 'Menu::devices');
$routes->get('menu/newPlaylist', 'Menu::newPlaylist');
$routes->get('menu/newSchedule', 'Menu::newSchedule');
$routes->get('menu/statistic', 'Menu::statistic');
$routes->get('menu/users', 'Menu::users');
$routes->get('menu/allPlaylists', 'Menu::allPlaylists');
