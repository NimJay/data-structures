<?php

// Each of these contains a function (e.g. data_structure_to_html()).
require_once(__DIR__ . '/data-structure-to-html.php');
require_once(__DIR__ . '/home-to-html.php');


function get_nav($activeDataStruct)
{
    global $DATA_STRUCTURES;
    $nav = '<nav><ul>';
    foreach ($DATA_STRUCTURES as $dataStruct) {
        $name = $dataStruct['name'];
        $isActive = $dataStruct === $activeDataStruct;
        $nav .= '<li><a class="' . ($isActive ? 'active' : '') . '" href="' . name_to_slug($name) . '">' . $name . '</a></li>';
    }
    return $nav . '</ul></nav>';
}
