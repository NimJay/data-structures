<?php

function home_to_html()
{
    return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <link rel="icon" href="favicon.png" type="image/png">

    <title>Data Structures</title>
    <style>'.file_get_contents(__DIR__ . '/inline-style.css').'</style>
</head>
<body>
    <main>
        <header>
            <h1>Data Structures</h1>
            <p>This site details the operations of various data structures.</p>
        </header>
        '.get_nav($dataStructure).'
    </main>
    '.get_footer().'
</body>
</html>
';
}
