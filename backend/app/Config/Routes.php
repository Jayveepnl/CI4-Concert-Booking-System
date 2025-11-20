<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/landingPage', 'Users::index');
$routes->get('/MoodBoard', 'Users::MoodBoard');
$routes->get('/RoadMap', 'Users::RoadMap');
$routes->get('/AccountPage', 'Users::AccountPage');
$routes->get('/Request', 'Users::RequestPage');
$routes->get('/ServicePage', 'Users::ServicePage');
$routes->get('/PaymentPage', 'Users::PaymentPage');

$routes->get('/admin/dashboard', 'admin::dashboard');

$routes->get('/signup', 'Auth::showSignup');
$routes->get('/login', 'Auth::showLogin');



$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->post('/signup', 'Auth::signup');
$routes->post('/login', 'Auth::login');
$routes->post('/logout', 'Auth::logout');
