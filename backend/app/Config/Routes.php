<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/landingPage', 'Users::index');
$routes->get('/MoodBoard', 'Users::MoodBoard');
$routes->get('/RoadMap', 'Users::RoadMap');
$routes->get('/SignUp', 'Users::SignUp');
$routes->get('/login', 'Users::Login');
$routes->get('/Service', 'Users::ServicePage');
$routes->get('/DashboardAdminPage', 'Users::DashboardAdminPage');
$routes->get('/AccountPage', 'Users::AccountPage');
$routes->get('/Request', 'Users::RequestPage');
$routes->get('/Payment', 'Users::PaymentPage');
