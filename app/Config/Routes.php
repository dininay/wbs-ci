<?php

namespace Config;

use CodeIgniter\Routing\RouteCollectionInterface;
use CodeIgniter\Routing\Router;
use CodeIgniter\Services;
use App\Controllers\DashboardController;
use App\Controllers\LaporController;
$routes->setAutoRoute(true);

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');

    $routes->get('/', 'HomeController::index');
    $routes->get('/lapor', 'LaporController::index');
    $routes->POST('/save', 'LaporController::save');
    $routes->get('/HomeController/searchById', 'HomeController::searchById');
    $routes->post('HomeController/searchById', 'HomeController::searchById');

    $routes->get('/login', 'AuthController::login');
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('/logout', 'AuthController::processLogout');
    $routes->post('/processLogin', 'AuthController::processLogin');
    $routes->get('/register', 'AuthController::register'); 
    $routes->post('/processRegister', 'AuthController::processRegister');

    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('/dashboard/dataLapor', 'DashboardController::dataLapor');
    $routes->get('/dashboard/edit/(:num)', 'DashboardController::editdataLapor/$1');
    $routes->post('/dashboard/update/(:num)', 'DashboardController::update/$1');
    $routes->post('/dashboard/detail/(:num)', 'DashboardController::detail/$1');

    // $routes->group('dashboard', ['middleware' => 'auth'], function ($routes) {
    //     $routes->get('/', 'DashboardController::index');
    //     // Tambahkan definisi route lainnya untuk halaman dashboard
    // });