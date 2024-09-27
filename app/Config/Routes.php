<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/import', 'Home::index');
$routes->post('/import/import', 'Home::import');
$routes->get('/', 'MyController::index');
