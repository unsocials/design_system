<?php

(isset(parse_url($_SERVER["REQUEST_URI"])['query'])) ? $query = parse_url($_SERVER["REQUEST_URI"])['query'] : $query = null;

if(isset($query)){
    parse_str($query, $output);
    $query = $output['components'];
}

views('design.view.php', [
    'title' => '<b>Design</b> System',
    'description' => 'Il <b>design system</b> delle sezioni',
    'nav' => 'design',
    'components' => $query,
]);