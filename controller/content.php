<?php

(isset(parse_url($_SERVER["REQUEST_URI"])['query'])) ? $query = parse_url($_SERVER["REQUEST_URI"])['query'] : $query = null;

if(isset($query)){
    parse_str($query, $output);
    $query = $output['section'];
}

views('content.view.php', [
    'title' => '<b>Content</b> Design',
    'description' => 'Il <b>design system</b> dei componenti',
    'nav' => 'content',
    'section' => $query,
]);