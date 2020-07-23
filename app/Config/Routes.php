<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Home
$routes->get('/', 'HomeController::index');
//Login
$routes->get('/login', 'LoginController::index');

//ADMIN
//Dashboard
$routes->get('/admin', 'Dashboard\AdminController::index');
//table
$routes->get('/pasienAdmin', 'Dashboard\AdminController::pasien');
$routes->get('/dokterAdmin', 'Dashboard\AdminController::dokter');
$routes->get('/adminAdmin', 'Dashboard\AdminController::admin');
$routes->get('/laporanAdmin', 'Dashboard\AdminController::laporan');
//forms
$routes->get('/pendaftaran', 'Dashboard\AdminController::pendaftaran');
$routes->get('/tambahPasien', 'Dashboard\AdminController::tambah_pasien');
$routes->post('/save_pasien', 'Dashboard\AdminController::save_pasien');
$routes->get('/suratRujukan', 'Dashboard\AdminController::surat_rujukan');
$routes->get('/tambahDokter', 'Dashboard\AdminController::tambah_dokter');
$routes->post('/save_dokter', 'Dashboard\AdminController::save_dokter');
$routes->get('/tambahAdmin', 'Dashboard\AdminController::tambah_admin');
$routes->get('/hapus_admin/(:num)', 'Dashboard\AdminController::hapus_admin/$1');
$routes->get('/edit_admin/(:segment)', 'Dashboard\AdminController::edit_admin/$1');
$routes->post('/edit_admin/(:segment)/(:num)', 'Dashboard\AdminController::update_admin/$2');
$routes->get('/hapus_pasien/(:num)', 'Dashboard\AdminController::hapus_pasien/$1');
$routes->get('/edit_pasien/(:segment)', 'Dashboard\AdminController::edit_pasien/$1');
$routes->post('/edit_pasien/(:segment)/(:num)', 'Dashboard\AdminController::update_pasien/$2');
$routes->post('/save_admin', 'Dashboard\AdminController::save_admin');
$routes->get('/pembayaran', 'Dashboard\AdminController::pembayaran');


//DOKTER
//Dashboard
$routes->get('/dokter', 'Dashboard\DokterController::index');
//tables
$routes->get('/pasienDokter', 'Dashboard\DokterController::pasien');
$routes->get('/dokterDokter', 'Dashboard\DokterController::dokter');
$routes->get('/obatDokter', 'Dashboard\DokterController::obat');
$routes->get('/riwayatDokter', 'Dashboard\DokterController::riwayat');
//forms
$routes->get('/tambahObat', 'Dashboard\DokterController::tambah_obat');
$routes->post('/save_obat', 'Dashboard\DokterController::save_obat');
$routes->get('/hapus_obat/(:num)', 'Dashboard\DokterController::hapus_obat/$1');
$routes->get('/edit_obat/(:segment)', 'Dashboard\DokterController::edit_obat/$1');
$routes->post('/edit_obat/(:segment)/(:num)', 'Dashboard\DokterController::update_obat/$2');
$routes->get('/tambahPemeriksaan', 'Dashboard\DokterController::tambah_pemeriksaan');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
