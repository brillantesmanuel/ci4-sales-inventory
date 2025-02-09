<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('inventory', 'Inventory::index');
$routes->get('sales', 'Sales::index');