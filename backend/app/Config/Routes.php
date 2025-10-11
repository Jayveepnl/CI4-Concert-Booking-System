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
$routes->get('/BookingPage', 'Users::BookingPage');

$routes->get('/index.html', 'Users::index');
$routes->get('/moodboard.html', 'Users::MoodBoard');
$routes->get('/roadmap.html', 'Users::RoadMap');
$routes->get('/signup.html', 'Users::SignUp');
$routes->get('/login.html', 'Users::Login');
$routes->get('/booking.html', 'Users::BookingPage');