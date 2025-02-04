<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index'); // Show Dashboard when opening "localhost:8080"

// $routes->get('/', 'Home::dashboard');

$routes->get('/news', 'News::index');
$routes->get('/news/create', 'News::create');
$routes->post('/news/store', 'News::store');

$routes->get('/news/show/(:num)', 'News::show/$1');
$routes->post('/news/addComment/(:num)', 'News::addComment/$1');



$routes->get('/categories', 'Category::index');
$routes->get('/categories/create', 'Category::create');
$routes->post('/categories/store', 'Category::store');

// $routes->get('/news', 'News::index');
// $routes->get('/news/create', 'News::create');
// $routes->post('/news/store', 'News::store');
