<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/landingPage', 'Users::index');
$routes->get('/MoodBoard', 'Users::MoodBoard');
$routes->get('/RoadMap', 'Users::RoadMap');
$routes->get('/signup', 'Auth::showSignup');
$routes->get('/login', 'Auth::showLogin');

$routes->get('/admin/DashboardAdminPage', 'admin::DashboardAdminPage');
$routes->get('/admin/AccountPage', 'admin::AccountPage');
$routes->get('/admin/RequestPage', 'admin::RequestPage');
$routes->get('/admin/ServicePage', 'admin::ServicePage');
$routes->post('/signup', 'Auth::signup');
$routes->post('/login', 'Auth::login');
$routes->post('/logout', 'Auth::logout');
