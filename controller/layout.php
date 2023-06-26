<?php

(isset(parse_url($_SERVER["REQUEST_URI"])['query'])) ? $query = parse_url($_SERVER["REQUEST_URI"])['query'] : $query = null;

if(isset($query)){
    parse_str($query, $output);
    $query = $output['section'];
}

views('layout.view.php', [
    'title' => '<b>Layout</b> System',
    'description' => 'Il <b>layout system</b> delle pagine',
    'nav' => 'layout',
    'section' => $query,
]);