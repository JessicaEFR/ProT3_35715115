<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index');

$routes->get('/usuarios', 'UsuarioController::index');
$routes->get('/usuarios/create', 'UsuarioController::create');
$routes->post('/usuarios/store', 'UsuarioController::store');
$routes->get('/usuarios/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('/usuarios/update/(:num)', 'UsuarioController::update/$1');
$routes->get('/usuarios/delete/(:num)', 'UsuarioController::delete/$1');

$routes->get('/login', 'LoginController::index');
$routes->post('/login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout'); */
$routes->get('acerca-de', 'About::index');
$routes->get('quienes_somos', 'QuienesSomos::index');
$routes->get('busqueda', 'Busqueda::index');
$routes->get('user', 'UserController::index');
$routes->get('user/logout', 'UserController::logout');
$routes->get('quienes_somos', 'QuienesSomosController::index');
$routes->get('busqueda', 'BusquedaController::index');
$routes->get('acerca_de', 'AcercaDeController::index');
$routes->get('acerca_de', 'AcercaDeController::index');


