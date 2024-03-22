<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/* ========== Start Homepage ========== */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/landing', 'Home::index');
/* ========== End Homepage ========== */

/* ========== Start About ========== */
// History
$routes->get('/about', 'About::index');
$routes->get('/about/svfc_history', 'About::svfc_history');

// College Seal
$routes->get('/about/college_seal', 'About::college_seal');

// Philosophy, Mission, and Vision
$routes->get('/about/philosophy_mission_and_vision', 'About::philosophy_mission_and_vision');

// Goals and Objectives
$routes->get('/about/goals_and_objectives', 'About::goals_and_objectives');

// SVFC Hymn
$routes->get('/about/svfc_hymn', 'About::svfc_hymn');
/* ========== End About ========== */

/* ========== Start Contact Us ========== */
$routes->get('/contact_us', 'Contact_Us::index');

$routes->post('/submit_message', 'Contact_Us::submit_message');
/* ========== End Contact Us ========== */

/* ========== Start Admin ========== */
$routes->get('/admin/list_of_messages', 'Admin::list_of_messages');
$routes->get('/admin/logout', 'Admin::logout');
$routes->post('/admin/login', 'Admin::login');
/* ========== End Admin ========== */