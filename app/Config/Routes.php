<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->get('kahveler', 'Kahveler::index');
$routes->get('hakkimizda', 'Hakkimizda::index');
$routes->get('mongo/(:num)', 'Home::test/$1');
