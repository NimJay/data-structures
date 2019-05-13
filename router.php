<?php

$urlParse = parse_url($_SERVER['REQUEST_URI']);
$path = $urlParse['path'];
$pathSegs = explode('/', $path);

require_once(__DIR__ . '/data-structures/data-structures.php');
require_once(__DIR__ . '/to-html/to-html.php');


if (count($pathSegs) === 2) {
    $dataStructure = get_data_structure($pathSegs[1]);
    if ($dataStructure) {
        echo data_structure_to_html($dataStructure);
        return;
    }
}


// TODO: Handle 404s more gracefully.
echo 'Page not found.';
