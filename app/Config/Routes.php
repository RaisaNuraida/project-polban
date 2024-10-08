<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/unduh', 'Home::index');
$routes->get('/import', 'Home::index');
$routes->post('/import/import', 'Home::import');
$routes->get('/', 'Home::ShowTableUser');
$routes->post('/update', 'Home::update');
$routes->post('delete', 'Home::deleteUser');
$routes->get('importdata', 'Import::index');

