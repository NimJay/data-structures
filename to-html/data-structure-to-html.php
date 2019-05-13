<?php

function data_structure_to_html($dataStructure)
{
    return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <link rel="icon" href="favicon.png" type="image/png">

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
