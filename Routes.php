<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AddressController;
/**
 * @var RouteCollection $routes
 */

$routes->get('/','EmployeeController::index');
$routes->post('create', 'EmployeeController::create');
$routes->post('/add-address', 'AddressController::addAddress');
$routes->get('/add-address', 'AddressController::index');
// Add more routes for edit, update, delete, etc. as needed
