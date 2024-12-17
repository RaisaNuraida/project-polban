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
$routes->get('/halamantentang', 'Home::tentang');
$routes->get('/cariuser', 'Home::cariuser');
$routes->get('/carianswer', 'carianswer::carianswer');
$routes->get('/carikuesioner', 'c_kuesioner::carikuesioner');
$routes->get('/conditionalkuesioner', 'carianswer::conditionalkuesioner');

$routes->get('/kuesionerkuesioner', 'c_kuesioner::index');
$routes->get('/', 'Home::dataAdministrator');
$routes->get('/', 'Home::dataAtasan');
$routes->get('importdata', 'Import::index');
$routes->get('/halamanlogin', 'login::halamanlogin');
$routes->get('/login', 'login::login');
$routes->get('/loginuser', 'login::halamanloginuser');
$routes->get('/halamanuser', 'login::indexuser');
$routes->get('/indexuser', 'c_kuesioner::indexuser');
$routes->get('/index', 'login::index');
$routes->get('/tabeluser', 'c_kuesioner::indexuser');
$routes->get('/kuesionerkuesioner', 'Home::kuesioner');
$routes->get('/tambahkuesioner', 'Home::tambahkuesioner');
$routes->get('/filteruser', 'Home::filteruser');
$routes->get('/kuesionerkuesioner', 'cKuesioner::countTables');
$routes->get('/kuesionerpage', 'kuesioner_page::tabel');
$routes->get('/kuesionerpage', 'kuesioner_page::index');
$routes->get('/dataisiann', 'dataisian::index');
$routes->get('/deskripsi', 'c_kuesioner::show');
$routes->get('/downloadCSV', 'cKuesioner::downloadCSV');
$routes->get('/welcomepage', 'welcomepage::dataWelcome');
$routes->get('/welcomepageee', 'Home::welcome');
$routes->get('/suntingWelcomePage', 'Home::SuntingWelcomePage');
$routes->get('/tracer', 'welcomepage::data');
$routes->get('/organisasiindex', 'Home::organisasi');
$routes->get('/organisasi', 'c_organisasi::tabelorganisasi');
$routes->get('/organisasijurusan', 'c_organisasi::index');
$routes->get('/halamanlogin', 'pengaturan::index');
$routes->get('/pengaturan', 'pengaturan::indexpengaturan');
$routes->get('/tracer', 'pengaturan::namasitus');
$routes->get('/halamankontak', 'Home::kontak');
$routes->get('/kontak', 'welcomepage::dataKontak');
$routes->get('/kuesionersection', 'Home::kuesionersection');

$routes->get('/tambahhalaman', to: 'welcomepage::tambahwelcome');

$routes->get('/dataisian', 'dataisian::dataisian');
$routes->get('/data', 'welcomepage::data');
$routes->get('/pengaturan', 'Home::setting');
$routes->get('/halamaneditprofile', 'editprofile::index');
$routes->get('/tentang', 'welcomepage::dataTentang');
$routes->get('/halamanperusahaan', 'Home::indexperusahaan');




//routes post
$routes->post('/import', 'Home::import');
$routes->post('/downloadCSV', 'cKuesioner::downloadCSV');
$routes->post('/delete', 'Home::deleteUser');
$routes->post('/deletetabel', 'kuesioner_page::delete');
$routes->post('/deleteprogram', 'c_organisasi::deleteUser');
$routes->post('/deleteUser', 'c_organisasi::deleteUser');
$routes->post('/deleteFaculty', 'c_organisasi::deleteFaculty');
$routes->post('/deletekuesioner', 'c_kuesioner::deleteUser');
$routes->post('/deletewelcome', 'welcomepage::deleteWelcome');
$routes->post('/halamanlogin', 'login::halamanlogin');
$routes->post('/loginuser', 'login::loginuser');
$routes->group('welcomepage', function ($routes) {
    $routes->get('/', 'welcomepage::index'); // Untuk menampilkan halaman utama
    $routes->post('submitMessage', 'welcomepage::submitMessage'); // Rute untuk submit Welcome Message
    $routes->post('submitTentang', 'welcomepage::submitTentang'); // Rute untuk submit Tentang
    $routes->post('submitKontak', 'welcomepage::submitKontak'); // Rute untuk submit Kontak
    $routes->post('tambahHalaman', 'welcomepage::tambahHalaman'); // Rute untuk submit Halaman Baru
});
$routes->post('/kuesionerpage', 'kuesioner_page::submitPengaturan');

$routes->post('/tambahkuesioner', 'c_kuesioner::tambahkuesioner');
$routes->post('/tambahkuesionerpage', 'kuesioner_page::tambahkuesionerpage');

$routes->post('/login', 'login::login');
$routes->post('/update', 'Home::update');
$routes->post('/kuesionerkuesioner', 'c_kuesioner::index');
$routes->post('/organisasi', 'c_organisasi::submitMessage');
$routes->post('/pengaturan', 'pengaturan::submitPengaturan');
$routes->post('/simpan-kuesioner', 'c_kuesioner::simpan');

