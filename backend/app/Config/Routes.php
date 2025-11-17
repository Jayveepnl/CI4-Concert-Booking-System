<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/landingPage', 'Users::index');
$routes->get('/MoodBoard', 'Users::MoodBoard');
$routes->get('/RoadMap', 'Users::RoadMap');
$routes->get('/SignUp', 'Users::SignUp');
$routes->get('/login', 'Users::Login');
