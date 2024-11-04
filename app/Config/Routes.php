<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kuesioner', 'Home::kuesioner');
$routes->get('/unduh', 'Home::index');
$routes->get('/import', 'Home::index');
$routes->get('/cariuser', 'Home::cariuser');
$routes->get('/carianswer', 'carianswer::carianswer');
$routes->get('/carikuesioner', 'c_kuesioner::carikuesioner');
$routes->get('/kuesionerkuesioner', 'c_kuesioner::index');
$routes->get('/', 'Home::dataAdministrator');
$routes->get('/', 'Home::dataAtasan');
$routes->get('importdata', 'Import::index');
$routes->get('/tracer', 'Home::tracer');
$routes->get('/halamanlogin', 'login::halamanlogin');
$routes->get('/login', 'login::login');
$routes->get('/kuesionerkuesioner', 'Home::kuesioner');
$routes->get('/filteruser', 'Home::filteruser');
$routes->get('/kuesionerkuesioner', 'cKuesioner::countTables');
$routes->get('/dataisian', 'Home::kuesioner_answer');
$routes->get('/deskripsi', 'c_kuesioner::show');
$routes->get('/downloadCSV', 'cKuesioner::downloadCSV');

$routes->post('/import', 'Home::import');
$routes->post('/downloadCSV', 'cKuesioner::downloadCSV');
$routes->post('/delete', 'Home::deleteUser');
$routes->post('/deletekuesioner', 'c_kuesioner::deleteUser');

$routes->post('/halamanlogin', 'login::halamanlogin');
$routes->post('/login', 'login::login');
$routes->post('/update', 'Home::update');
$routes->post('/kuesionerkuesioner', 'c_kuesioner::index');
