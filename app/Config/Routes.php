<?php

namespace Config;

use CodeIgniter\Routing\RouteCollectionInterface;
use CodeIgniter\Routing\Router;
use CodeIgniter\Services;
$routes->setAutoRoute(true);

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');

    $routes->get('/', 'HomeController::index');
    $routes->get('/lapor', 'LaporController::index');
    $routes->POST('/save', 'LaporController::save');

    $routes->get('/login', 'AuthController::login');
    $routes->get('/logout', 'AuthController::processLogout');
    $routes->post('/processLogin', 'AuthController::processLogin');
    $routes->get('/register', 'AuthController::register'); 
    $routes->post('/processRegister', 'AuthController::processRegister');

    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/dataLapor', 'DashboardController::dataLapor');
    