<?php

function data_structure_to_html($dataStructure)
{
    return '<!DOCTYPE html>
<html lang="en">
<head>
    <title>' . $dataStructure['name'] . '</title>
    <style>'.file_get_contents(__DIR__ . '/inline-style.css').'</style>
</head>
<body>
    <main>
        <header>
            <h1>'.$dataStructure['name'].'</h1>
        </header>
        '.operations_to_section($dataStructure['operations'], 'Operations').'
        '.operations_to_section($dataStructure['additionalOperations'], 'More Operations').'
        '.get_nav($dataStructure).'
    </main>
    '.get_footer().'
</body>
</html>
';
}

function get_css() 
{
    return '<style type="text/css">
    body
</style>';
}

function operations_to_section($operations, $heading)
{
    if (!is_array($operations) || count($operations) === 0) {
        return '';
    }
    return '<section>
    <h2>'.$heading.'</h2>
    '.operations_to_table($operations).'
</section>';
}

function operations_to_table($operations)
{
    $table = '<table class="table-operations"><thead><tr><th></th><th>Big O</th><th>Description</th></tr></thead><tbody>';
    foreach ($operations as $op) {
        $table .= '' .
            '<tr>' .
                '<td>' . $op['name'] . '</td>' .
                '<td>' . $op['averageO'] . '</td>' .
                '<td>' . $op['description'] . '</td>' .
            '</tr>';
    }
    $table .= '</tbody></table>';
    return $table;
}

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

function get_footer() 
{
    return '<footer>
    <p>Found an issue or got suggestions?<br/> Let me know on <a href="https://github.com/NimJay" target="_blank">GitHub</a> or <a href="https://twitter.com/IAmNimJay" target="_blank">Twitter</a>. :)</p>
</footer>';
}
