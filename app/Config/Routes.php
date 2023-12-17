<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::logreg');
$routes-> get ('/home', 'Home::index');
$routes->get('/reg', 'Home::reg');
$routes->get('/about', 'Home::ab');
$routes->get('/savestud', 'StudentController::pga');
$routes->post('/save', 'StudentController::save');
$routes->get('/admins', 'AdminController::index');
$routes->get('/cal', 'AdminController::cal');
$routes->get('/addTeacher', 'TeacherController::addTeacher');

$routes->get('/teach/(:any)', 'TeacherController::teach/$1');

$routes->post('/saveteacher', 'TeacherController::save');
$routes->get('/deleteteacher/(:any)', 'TeacherController::delete/$1');
$routes->get('/editteacher/(:any)', 'TeacherController::edit/$1');

$routes->get('/teacher', 'TeacherController::teacher');

$routes->get('/graph', 'GradeController::index');

$routes->post('/Registering', 'StudentController::register');
$routes->get('/logout', 'Home::Logout');
$routes->post('/LoginAuth', 'Home::LoginAuth');