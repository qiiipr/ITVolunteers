<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('events/index', 'Events::index');
$routes->get('pages/about', 'Pages::about');
$routes->get('pages/contact', 'Pages::contact');
$routes->get('events/show/(:num)', 'Events::show/$1');
$routes->get('events/image/(:any)', 'Events::image/$1');
$routes->get('profile/edit', 'Profile::edit');
$routes->get('profile/image/(:any)', 'Profile::image/$1');

$routes->post('events/saveRegistration', 'Events::saveRegistration');
$routes->post('profile/update', 'Profile::update');
$routes->post('profile/avatar_update', 'Profile::avatar_update');
$routes->post('events/addReview', 'Events::addReview');
$routes->post('search', 'Events::search');
$routes->post('pages/sendEmail', 'Pages::sendEmail');

// need Auth routes
$routes->group('', ['filter' => 'role:volunteer, admin'], function ($routes) {

    $routes->get('events/new', 'Events::new');
    $routes->get('events/manage_events', 'Events::manage_events');
    $routes->get('events/edit/(:num)', 'Events::edit/$1');
    $routes->get('events/delete/(:num)', 'Events::delete/$1');
    $routes->get('admin/index', 'Admin::index');
    $routes->get('admin/events/edit_event/(:num)', 'Admin::edit_event/$1');
    $routes->get('admin/events/showEventSubscriptions/(:num)', 'Admin::showEventSubscriptions/$1');
    $routes->get('admin/events/(:num)', 'Admin::viewRegisterEvent/$1');
    $routes->get('admin/delete_event/(:num)', 'Admin::delete_event/$1');
    $routes->get('admin/events', 'Admin::events');
    $routes->get('admin/added_events', 'Admin::added_events');
    $routes->post('events/create', 'Events::create');
    $routes->post('events/delete/(:num)', 'Events::delete/$1');
    $routes->post('admin/events/activate-event', 'Admin::eventActive');
    $routes->post('admin/events/update-attend', 'Admin::updateAttend');
    $routes->post('admin/update_event', 'Admin::update_event');
});

/// Admin routes
$routes->group('', ['filter' => 'role:admin'], function ($routes) {

    $routes->get('admin/users', 'Admin::users');
    $routes->get('admin/users/edit_user/(:num)', 'Admin::edit_user/$1');
    $routes->get('admin/delete_user/(:num)', 'Admin::delete_user/$1');
    $routes->get('admin/reviews', 'Admin::reviews');
    $routes->get('admin/reviews/edit_review/(:num)', 'Admin::edit_review/$1');
    $routes->get('admin/delete_review/(:num)', 'Admin::delete_review/$1');
    $routes->get('admin/toggleAttendance/(:num)', 'Admin::toggleAttendance/$1');
    $routes->post('admin/update_user', 'Admin::update_user');
    $routes->post('admin/update_review', 'Admin::update_review');
    $routes->post('admin/deactivate', 'Admin::deactivate');
    $routes->post('admin/set_admin', 'Admin::set_admin');
    $routes->post('admin/set_volunteer', 'Admin::set_volunteer');
});


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
