<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/form','Form::store');
// $routes->get('/form/insert','Form::insertData');
$routes->get('/student/form','StudentController::index');
$routes->get('/student/create','StudentController::create');
$routes->post('/student/add','StudentController::addData');
$routes->get('/student/edit/(:num)','StudentController::editData/$1');
$routes->put('/student/update/(:num)','StudentController::updateData/$1');
$routes->get('/student/delete/(:num)','StudentController::deleteData/$1');
$routes->get('/getAll','StudentController::getAllData');
