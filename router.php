<?php

$urlParse = parse_url($_SERVER['REQUEST_URI']);
$path = $urlParse['path'];
$pathSegs = explode('/', $path);

require_once(__DIR__ . '/data-structures/data-structures.php');
require_once(__DIR__ . '/to-html/to-html.php');


if (count($pathSegs) === 2) {

    // Data structure page.
    $dataStructure = get_data_structure($pathSegs[1]);
    if ($dataStructure) {
        echo data_structure_to_html($dataStructure);
        return;

    // Home page.
    } else if (empty($pathSegs[1])) {
        echo home_to_html();
        return;

    // File!
    } else if (file_exists(__DIR__ . $path)) {
        echo file_get_contents(__DIR__ . '/favicon.png');
        return;
    }
}


// TODO: Handle 404s more gracefully.

echo not_found_to_html();
