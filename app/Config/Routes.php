<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('admin', 'admin::index');
$routes->get('profil','profil::index');
$routes->get('profil/edit(:segment)','profil::edit/$1');
$routes->get('profil/edit(:segment)','profil::edit/$1');
$routes->post('profil/update(:any)', 'profil::update/$1');
$routes->get('banner', 'banner::index');

$routes->post('banner/tambahbanner', 'banner::tambahbanner');
$routes->get('banner/edit(:segment)', 'banner::edit/$1');
$routes->post('banner/update(:any)', 'banner::update/$1');
$routes->delete('banner/delete/(:any)', 'banner::delete/$1');

$routes->get('portfolio', 'portfolio::index');
$routes->get('portfolio/edit(:segment)','portfolio::edit/$1');
$routes->post('portfolio/tambahportfolio', 'portfolio::tambahportfolio');
$routes->post('portfolio/update(:any)', 'portfolio::update/$1');
$routes->delete('portfolio/delete/(:any)', 'portfolio::delete/$1');

$routes->get('rekanan', 'rekanan::index');
$routes->get('rekanan/edit(:segment)','rekanan::edit/$1');
$routes->post('rekanan/tambahrekanan', 'rekanan::tambahrekanan');
$routes->post('rekanan/update(:any)', 'rekanan::update/$1');
$routes->delete('rekanan/delete/(:any)', 'rekanan::delete/$1');

$routes->get('team', 'team::index');
$routes->get('team/edit(:segment)','team::edit/$1');
$routes->post('team/tambahteam', 'team::tambahteam');
$routes->post('team/update(:any)', 'team::update/$1');
$routes->delete('team/delete/(:any)', 'team::delete/$1');

// $routes->get('team', 'team::index');
// $routes->get('team/edit(:segment)','team::edit/$1');
// $routes->post('team/tambahteam', 'team::tambahteam');
// $routes->post('team/update(:any)', 'team::update/$1');
// $routes->delete('team/delete/(:any)', 'team::delete/$1');

$routes->post('admin/simpan', 'admin::simpan');
$routes->post('admin/update(:any)', 'admin::update/$1');

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
