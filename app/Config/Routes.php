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
$routes->get('/pasien', 'Dashboard\AdminController::pasien');
$routes->get('/dokterAdmin', 'Dashboard\AdminController::dokter');
$routes->get('/obat', 'Dashboard\AdminController::obat');
$routes->get('/admin', 'Dashboard\AdminController::admin');
$routes->get('/laporan', 'Dashboard\AdminController::laporan');
//forms
$routes->get('/tambah_pasien', 'Dashboard\PasienController::tambah_pasien');


//DOKTER
//Dashboard
$routes->get('/dokter', 'Dashboard\DokterController::index');

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
