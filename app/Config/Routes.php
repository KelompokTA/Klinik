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
$routes->get('/suratRujukan', 'Dashboard\AdminController::rujuk');
//FORM
//Form Pasien
$routes->get('/pendaftaran', 'Dashboard\AdminController::pendaftaran');
$routes->post('/save_pendaftaran', 'Dashboard\AdminController::save_pendaftaran');
$routes->get('/cetak_kartu/(:num)', 'Dashboard\AdminController::cetak_kartu/$1');
$routes->get('/cetak_antrian/(:num)', 'Dashboard\AdminController::cetak_antrian/$1');
$routes->get('/hapus_antrian/(:num)', 'Dashboard\AdminController::hapus_antrian/$1');
$routes->get('/cetak_kwitansi/(:num)', 'Dashboard\AdminController::cetak_kwitansi/$1');
$routes->get('/cetak_laporan', 'Dashboard\AdminController::cetak_laporan');
$routes->get('/cetak_rujukan/(:num)', 'Dashboard\AdminController::cetak_rujukan/$1');
$routes->get('/tambahPasien', 'Dashboard\AdminController::tambah_pasien');
$routes->post('/save_pasien', 'Dashboard\AdminController::save_pasien');
$routes->get('/hapus_pasien/(:num)', 'Dashboard\AdminController::hapus_pasien/$1');
$routes->get('/edit_pasien/(:segment)', 'Dashboard\AdminController::edit_pasien/$1');
$routes->post('/edit_pasien/(:segment)/(:num)', 'Dashboard\AdminController::update_pasien/$2');
//Form Dokter
$routes->get('/tambahDokter', 'Dashboard\AdminController::tambah_dokter');
$routes->post('/save_jadwal', 'Dashboard\AdminController::save_jadwal');
$routes->post('/save_dokter', 'Dashboard\AdminController::save_dokter');
$routes->get('/hapus_dokter/(:num)', 'Dashboard\AdminController::hapus_dokter/$1');
$routes->get('/edit_dokter/(:segment)', 'Dashboard\AdminController::edit_dokter/$1');
$routes->post('/edit_dokter/(:segment)/(:num)', 'Dashboard\AdminController::update_dokter/$2');
//Form Admin
$routes->get('/tambahAdmin', 'Dashboard\AdminController::tambah_admin');
$routes->get('/hapus_admin/(:num)', 'Dashboard\AdminController::hapus_admin/$1');
$routes->get('/edit_admin/(:segment)', 'Dashboard\AdminController::edit_admin/$1');
$routes->post('/edit_admin/(:segment)/(:num)', 'Dashboard\AdminController::update_admin/$2');
$routes->post('/save_admin', 'Dashboard\AdminController::save_admin');
$routes->get('/pembayaran', 'Dashboard\AdminController::pembayaran');
$routes->get('/save_pembayaran/(:num)', 'Dashboard\AdminController::save_pembayaran/$1');
$routes->get('/hapus_laporan/(:num)', 'Dashboard\AdminController::hapus_laporan/$1');



//DOKTER
//Dashboard
$routes->get('/dokter', 'Dashboard\DokterController::index');
//tables
$routes->get('/pasienDokter', 'Dashboard\DokterController::pasien');
$routes->get('/dokterDokter', 'Dashboard\DokterController::dokter');
$routes->get('/obatDokter', 'Dashboard\DokterController::obat');
$routes->get('/riwayatDokter', 'Dashboard\DokterController::riwayat');
$routes->get('/detailRiwalat/(:num)', 'Dashboard\DokterController::detail_riwayat/$1');
//forms
$routes->get('/tambahObat', 'Dashboard\DokterController::tambah_obat');
$routes->post('/save_obat', 'Dashboard\DokterController::save_obat');
$routes->get('/hapus_obat/(:num)', 'Dashboard\DokterController::hapus_obat/$1');
$routes->get('/edit_obat/(:segment)', 'Dashboard\DokterController::edit_obat/$1');
$routes->post('/edit_obat/(:segment)/(:num)', 'Dashboard\DokterController::update_obat/$2');
$routes->get('/tambahPelayanan', 'Dashboard\DokterController::tambah_pelayanan');
$routes->get('/hapus_pelayanan/(:num)', 'Dashboard\DokterController::hapus_pelayanan/$1');
$routes->post('/save_pelayanan', 'Dashboard\DokterController::save_pelayanan');
$routes->get('/edit_pelayanan/(:num)', 'Dashboard\DokterController::edit_pelayanan/$1');
$routes->post('/update_pelayanan/(:num)', 'Dashboard\DokterController::update_pelayanan/$1');

$routes->post('/tambah_resep/update_pelayanan/(:num)', 'Dashboard\DokterController::update_pelayanan_biaya/$1');
$routes->post('/tambah_resep/(:segment)/(:num)', 'Dashboard\DokterController::save_resep/$2');
$routes->get('/tambah_resep/(:num)', 'Dashboard\DokterController::tambah_resep/$1');
$routes->get('/tambah_resep/(:segment)/(:num)/(:num)', 'Dashboard\DokterController::hapus_resep/$2/$3');

$routes->get('/tambah_asesmen/(:num)', 'Dashboard\DokterController::tambah_asesmen/$1');
$routes->post('/save_asesmen/(:num)', 'Dashboard\DokterController::save_asesmen/$1');

$routes->get('/tambah_diagnosa/(:num)', 'Dashboard\DokterController::tambah_diagnosa/$1');
$routes->post('/save_diagnosa/(:num)', 'Dashboard\DokterController::save_diagnosa/$1');

$routes->get('/tambah_rujukan/(:num)', 'Dashboard\DokterController::tambah_rujukan/$1');
$routes->post('/save_rujukan/(:num)', 'Dashboard\DokterController::save_rujukan/$1');






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
