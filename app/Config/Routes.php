<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Users;
use App\Controllers;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('pages/(:segment)', [Pages::class, 'view']);
$routes->post('users/login', 'Users::login');
$routes->get('users/add', 'Users::add');
$routes->post('users/register', 'Users::register');
$routes->get('users', 'Users::index');
