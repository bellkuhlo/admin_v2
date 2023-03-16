<?php
// cms/index.php

session_start();

require_once __DIR__ . '/app/core/Config.php';
require_once __DIR__ . '/app/core/Autoloader.php';

\App\Core\Autoloader::register();

use App\Core\Router;

$router = new Router();

// Register routes
$router->addRoute('/', 'app\controllers\FrontendController', 'index');
$router->addRoute('/about', 'app\controllers\FrontendController', 'about');
$router->addRoute('/admin', 'app\controllers\AdminController', 'dashboard');
$router->addRoute('/admin/login', 'app\controllers\AdminController', 'login');

// Execute the router
$router->execute();
