<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kuesioner', 'Home::kuesioner');
$routes->get('/unduh', 'Home::index');
$routes->get('/import', 'Home::index');
$routes->post('/import', 'Home::import');
$routes->post('/downloadCSV', 'cKuesioner::downloadCSV');
$routes->get('/dataisian', 'Home::dataisian');
$routes->get('/', 'Home::dataAdministrator');
$routes->get('/', 'Home::dataAtasan');
$routes->post('/delete', 'Home::deleteUser');
$routes->get('importdata', 'Import::index');
$routes->get('/tracer', 'Home::tracer');
$routes->post('/halamanlogin', 'login::halamanlogin');
$routes->get('/halamanlogin', 'login::halamanlogin');
$routes->get('/login', 'login::login');
$routes->post('/login', 'login::login');
$routes->post('/update', 'Home::update');
$routes->get('/kuesioner', 'Home::kuesioner');
$routes->get('/dataisian', 'cKuesioner::dataisian');
