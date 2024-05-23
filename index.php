<?php

require 'function.php';

// dd($_SERVER);

$url = $_SERVER['REQUEST_URI'];


// if($url == '/'){
//     require 'controllers/index.php';
// }
// if($url == '/about'){
//     require 'controllers/about.php';
// }

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
];

$file = $routes[$url] ?? 'controllers/404.php';

require $file;