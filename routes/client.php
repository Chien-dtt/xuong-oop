<?php

use Chien\XuongOop\Controllers\Client\HomeController;
use Chien\XuongOop\Controllers\Client\AboutController;
use Chien\XuongOop\Controllers\Client\ContactController;
use Chien\XuongOop\Controllers\Client\ProductController;


$router->get( '/',                  HomeController::class       . '@index');
$router->get( '/about',             AboutController::class      . '@index');

$router->get( '/contact',           ContactController::class    . '@index');
$router->post( '/contact/store',    ContactController::class    . '@store');

$router->get( '/products',          ProductController::class    . '@index');
$router->get( '/products/{id}',     ProductController::class    . '@detail');