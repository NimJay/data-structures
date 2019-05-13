<?php

function not_found_to_html()
{
    return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <link rel="icon" href="favicon.png" type="image/png">

    <title>Page Not Found</title>
    <style>'.file_get_contents(__DIR__ . '/inline-style.css').'</style>
</head>
<body>
    <main>
        <header>
            <h1>Page Not Found</h1>
            <p>This page doesn\'t seem to exist. &lt;/3</p>
        </header>
        '.get_nav().'
    </main>
    '.get_footer().'
</body>
</html>
';
}
