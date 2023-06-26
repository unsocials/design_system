<?php

(isset(parse_url($_SERVER["REQUEST_URI"])['query'])) ? $query = parse_url($_SERVER["REQUEST_URI"])['query'] : $query = null;

if(isset($query)){
    parse_str($query, $output);
    $query = $output['section'];
}

views('components.view.php', [
    'title' => '<b>Components</b> System',
    'description' => 'Il <b>design system</b> delle sezioni',
    'nav' => 'components',
    'section' => $query,
]);