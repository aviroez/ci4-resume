<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'index']);
$routes->post('contacts', 'Home::contacts', ['as' => 'contacts.post']);
