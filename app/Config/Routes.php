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
$routes->get('/', 'Authentication::login', ['filter' => 'noauth']);
$routes->get('/dashboard', 'Courses::index', ['filter' => 'auth']);
$routes->get('/profile', 'Home::profile', ['filter' => 'auth']);
$routes->get('/view-course/(:num)/(:num)', 'Home::view/$1/$2', ['filter' => 'auth']);

$routes->group('course', ['filter' => 'auth'], function ($routes) {
	$routes->get('customer-service-specialist', 'Courses::customer_service');
	$routes->get('data-analysis', 'Courses::data_analyst');
	$routes->get('it-administrator', 'Courses::it_administrator');
	$routes->get('it-support-specialist', 'Courses::it_support');
	$routes->get('sales-representative', 'Courses::sales_representative');
	$routes->get('software-developer', 'Courses::software_developer');
});

$routes->match(['get', 'post'], '/login', 'Authentication::login', ['filter' => 'noauth']);
$routes->match(['get', 'post'], '/register', 'Authentication::registration', ['filter' => 'noauth']);
$routes->get('/logout', 'Authentication::logout', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/forgot-password', 'Authentication::forgot', ['filter' => 'noauth']);
$routes->match(['get', 'post'],'/reset-password/(:any)', 'Authentication::reset/$1', ['filter' => 'noauth']);
$routes->get('/verify/(:any)', 'Authentication::verify/$1', ['filter' => 'noauth']);
$routes->get('/resend/(:any)/(:any)', 'Authentication::resend_link/$1/$2', ['filter' => 'noauth']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
