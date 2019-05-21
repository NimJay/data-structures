<?php

$DATA_STRUCTURES = []; // Populated by files required below.

// Each of these adds a data structure to $DATA_STRUCTURES.
require_once(__DIR__ . '/stack.php');
require_once(__DIR__ . '/queue.php');
require_once(__DIR__ . '/max-heap.php');
require_once(__DIR__ . '/min-heap.php');


/**
 * The slug of a data structure is a URL-friendly string name.
 * If the name is "Binary Search Tree", the slug is "binary-search-tree".
 */
function get_data_structure($slug) 
{
    global $DATA_STRUCTURES;
    foreach ($DATA_STRUCTURES as $ds) {
        if (name_to_slug($ds['name']) === $slug) {
            return $ds;
        }
    }
    return null;
}


function get_data_structures_of_type($type)
{
    global $DATA_STRUCTURES;
    return array_filter($DATA_STRUCTURES, function ($dataStruct) use ($type) {
        return $dataStruct['type'] === $type;
    });
}


// Convert strings like "Data Structure", return "data-structure".
function name_to_slug($name) 
{
    $slug = strtolower($name);
    $slug = explode(' ', $slug);
    $slug = implode('-', $slug);
    return $slug;
}