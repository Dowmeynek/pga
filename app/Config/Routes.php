<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Home::logreg');
$routes-> get ('/', 'Home::index');
$routes->get('/reg', 'Home::reg');
$routes->get('/about', 'Home::ab');

$routes->get('/admins', 'AdminController::index');
$routes->get('/cal', 'AdminController::cal');

$routes->get('/addTeacher', 'AdminController::addTeacher');
$routes->get('/teach/(:any)', 'AdminController::teach/$1');
$routes->post('/saveteacher', 'AdminController::save');
$routes->get('/deleteteacher/(:any)', 'AdminController::delete/$1');
$routes->get('/editteacher/(:any)', 'AdminController::edit/$1');
$routes->get('/teacher', 'TeacherController::teacher');
$routes->get('/enroll', 'AdminController::enroll');
$routes->get('/deleteenroll/(:any)', 'AdminController::delete/$1');
$routes->get('/editenroll/(:any)', 'AdminController::edit/$1');

$routes->get('/graph', 'GradeController::index');

$routes->get('/student', 'StudentController::index');


$routes->get('/addenroll', 'EnrollmentController::addenroll');
$routes->get('/enroll/(:any)', 'EnrollmentController::enroll/$1');
$routes->post('/save', 'EnrollmentController::save');
//$routes->post('/saveparent', 'EnrollmentController::saveparent');
$routes->post('/savemother', 'EnrollmentController::savemother');
$routes->post('/savefather', 'EnrollmentController::savefather');
$routes->post('/saveguardian', 'EnrollmentController::saveguardian');
//$routes->post('/saveschool', 'EnrollmentController::saveschool');
$routes->post('/savepreschool', 'EnrollmentController::savepreschool');
$routes->post('/saveg1_g3', 'EnrollmentController::saveg1_g3');
$routes->post('/saveg4_g6', 'EnrollmentController::saveg4_g6');
$routes->post('/savejunior', 'EnrollmentController::savejunior');

$routes->post('/Registering', 'StudentController::register');
$routes->get('/logout', 'Home::Logout');
$routes->post('/LoginAuth', 'Home::LoginAuth');


$routes->get('/li', 'LibraryController::index');
$routes->get('/addbooks', 'LibraryController::addBooks');
$routes->post('library/saveData', 'LibraryController::saveData');
