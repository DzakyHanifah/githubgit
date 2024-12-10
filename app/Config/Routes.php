<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Pages::about');//Halaman baru about
$routes->get('last', 'lastpages::index');


