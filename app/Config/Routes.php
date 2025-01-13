<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Users;
use App\Controllers;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('projects', 'Home::projects');

$routes->get('projects/edit', 'Projects::edit');
$routes->post('projects/edit', 'Projects::modify');
$routes->post('projects/register', 'Projects::register');
$routes->get('projects/add', 'Projects::add');
$routes->get('projects/getById', 'Projects::getById');
$routes->post('projects/deleteslika/(:num)', 'Projects::deleteslika/$1');
// $routes->get('projects/deleteslika/(:num)', 'Projects::deleteslika/$1');
$routes->get('stan/edit', 'Stan::edit');
$routes->post('stan/edit', 'Stan::modify');
$routes->post('stan/register', 'Stan::register');
$routes->get('stan/add', 'Stan::add');
$routes->get('stan/getById', 'Stan::getById');
$routes->post('stan/deleteslika/(:num)', 'Stan::deleteslika/$1');
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('pages/(:segment)', [Pages::class, 'view']);
$routes->post('users/login', 'Users::login');
$routes->get('users/logout', 'Users::logout');
$routes->get('users/add', 'Users::add');
$routes->get('users/getById/(:any)', 'Users::getById');
$routes->post('users/register', 'Users::register');
$routes->get('users/edit', 'Users::edit');
$routes->post('users/edit', 'Users::modify');
$routes->get('users/panel', 'Users::panel');
$routes->get('users', 'Users::index');
