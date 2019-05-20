<?php

$urlParse = parse_url($_SERVER['REQUEST_URI']);
$path = $urlParse['path'];
$pathSegs = explode('/', $path);

require_once(__DIR__ . '/data-structures/data-structures.php');
require_once(__DIR__ . '/to-html/to-html.php');


// /data-structures
if ($path === '/data-structures/') {
    echo home_to_html();
    return;
}


// /data-structures/foo.
if (count($pathSegs) === 3 && $pathSegs[1] === 'data-structures') {
    $dataStructure = get_data_structure($pathSegs[2]);
    if ($dataStructure) {
        echo data_structure_to_html($dataStructure);
        return;
    }
}

// Files
if ($pathSegs[1] === 'data-structures') {
    $filePath = __DIR__ . '/' . $pathSegs[2];
    if (is_file($filePath)) {
        echo file_get_contents($filePath);
        return;
    }
}


header("HTTP/1.0 404 Not Found");
echo not_found_to_html();
