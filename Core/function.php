<?php 
/**
 * Function file
 * Design System
 * Author: Mez - Massimo Maestri
 */

function base_path($path){
    return BASE_PATH . $path;   
}

function views($uri, $attr = []){
    extract($attr);
    return require base_path('views/' . $uri);
}

?>