<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/import', 'ImportController::index');
$routes->post('/import/import', 'ImportController::import');
