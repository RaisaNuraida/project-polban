<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //routes get
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
$routes->get('/halamantracer', 'Home::tracer');
$routes->get('/halamanloginh', 'login::halamanlogin');
$routes->get('/login', 'login::login');
$routes->get('/loginuser', 'login::halamanloginuser');
$routes->get('/halamanuser', 'login::indexuser');
$routes->get('/indexuser', 'c_kuesioner::indexuser');
$routes->get('/index', 'login::index');
$routes->get('/tabeluser', 'c_kuesioner::indexuser');
$routes->get('/kuesionerkuesioner', 'Home::kuesioner');
$routes->get('/filteruser', 'Home::filteruser');
$routes->get('/kuesionerkuesioner', 'cKuesioner::countTables');
$routes->get('/page', 'kuesioner_page::tabel');
$routes->get('/page', 'kuesioner_page::index');

$routes->get('/dataisiannn', 'dataisian::dataisian');
$routes->get('/dataisiann', 'dataisian::index');
$routes->get('/dataisian', 'dataisian::AlumniDistinct');

$routes->get('/deskripsi', 'c_kuesioner::show');
$routes->get('/downloadCSV', 'cKuesioner::downloadCSV');
$routes->get('/welcomepage', 'Home::welcome');
$routes->get('/tracer', 'welcomepage::data');
$routes->get('/organisasiindex', 'Home::organisasi');
$routes->get('/organisasi', 'c_organisasi::tabelorganisasi');
$routes->get('/organisasijurusan', 'c_organisasi::index');
$routes->get('/halamanlogin', 'pengaturan::index');
$routes->get('/tracer', 'pengaturan::namasitus');

$routes->get('/data', 'welcomepage::data');
$routes->get('/pengaturan', 'Home::setting');
$routes->get('/halamaneditprofile', 'editprofile::index');



//routes post
$routes->post('/import', 'Home::import');
$routes->post('/downloadCSV', 'cKuesioner::downloadCSV');
$routes->post('/delete', 'Home::deleteUser');
$routes->post('/deletetabel', 'kuesioner_page::delete');

$routes->post('/deleteprogram', 'c_organisasi::deleteUser');
$routes->post('/deleteUser', 'c_organisasi::deleteUser');
$routes->post('/deleteFaculty', 'c_organisasi::deleteFaculty');
$routes->post('/deletekuesioner', 'c_kuesioner::deleteUser');
$routes->post('/deletekuesioner', 'c_kuesioner::deleteUser');
$routes->post('/halamanlogin', 'login::halamanlogin');
$routes->post('/loginuser', 'login::loginuser');
$routes->post('/welcomepage', 'welcomepage::submitMessage');
$routes->post('/kuesionerpage', 'kuesioner_page::submitPengaturan');

$routes->post('/login', 'login::login');
$routes->post('/update', 'Home::update');
$routes->post('/kuesionerkuesioner', 'c_kuesioner::index');
$routes->post('/organisasi', 'c_organisasi::submitMessage');
$routes->post('/pengaturan', 'pengaturan::submitPengaturan');
