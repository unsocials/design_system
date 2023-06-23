<?php 
/**
 * Main Page 
 * Design System
 * Author: Mez - Massimo Maestri
 */

const BASE_PATH =  __DIR__ . '/';
require(BASE_PATH . 'config.php');
require(BASE_PATH . 'core/function.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

$router = new \Core\Router();
$routes = require(base_path('routes.php'));

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$router->route($uri);
