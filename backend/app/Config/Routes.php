<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/landingPage', 'Users::index');
$routes->get('/MoodBoard', 'Users::MoodBoard');
$routes->get('/RoadMap', 'Users::RoadMap');

$routes->get('/index.html', 'Users::index');
$routes->get('/moodboard.html', 'Users::MoodBoard');
$routes->get('/roadmap.html', 'Users::RoadMap');