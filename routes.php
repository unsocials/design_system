<?php 
/**
 * Route file
 * Design System
 * Author: Mez - Massimo Maestri
 */

$router->get('/', 'controller/index.php');
$router->get('/content', 'controller/content.php');
$router->get('/components', 'controller/components.php');
$router->get('/layout', 'controller/layout.php');