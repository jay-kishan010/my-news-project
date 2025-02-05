<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index'); // Show Dashboard when opening "localhost:8080"

// $routes->get('/', 'Home::dashboard');

$routes->get('/news', 'News::index');         // Show all news
$routes->get('/news/create', 'News::create'); // Show create form
$routes->post('/news/store', 'News::store');  // Store new news
$routes->get('/news/show/(:num)', 'News::show/$1');  // Show single news
$routes->get('/news/edit/(:num)', 'News::edit/$1');  // Edit news
$routes->post('/news/update/(:num)', 'News::update/$1'); // Update news
$routes->get('/news/delete/(:num)', 'News::delete/$1'); // Delete news

// $routes->get('/news', 'News::index');
// $routes->get('/news/create', 'News::create');
// $routes->post('/news/store', 'News::store');

// $routes->get('/news/show/(:num)', 'News::show/$1');
$routes->post('/news/addComment/(:num)', 'News::addComment/$1');



$routes->get('/categories', 'Category::index');
$routes->get('/categories/create', 'Category::create');
$routes->post('/categories/store', 'Category::store');

// $routes->get('/news', 'News::index');
// $routes->get('/news/create', 'News::create');
// $routes->post('/news/store', 'News::store');
