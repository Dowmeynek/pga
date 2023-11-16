<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::logreg');
$routes-> get ('/home', 'Home::index');
$routes->get('/reg', 'Home::reg');
$routes->get('/about', 'Home::ab');

