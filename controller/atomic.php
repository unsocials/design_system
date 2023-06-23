<?php

(isset(parse_url($_SERVER["REQUEST_URI"])['query'])) ? $query = parse_url($_SERVER["REQUEST_URI"])['query'] : $query = null;

if(isset($query)){
    parse_str($query, $output);
    $query = $output['components'];
}

views('atomic.view.php', [
    'title' => '<b>Atomic</b> Design',
    'description' => 'Il <b>design system</b> dei componenti',
    'nav' => 'atomic',
    'components' => $query,
]);