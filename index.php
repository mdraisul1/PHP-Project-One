<?php

require 'function.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
];

function routeToControllers($url, $routes){
    if(array_key_exists($url, $routes)){
        require $routes[$url];
    }else{
        abort();
    }
}

function abort($code = 404){
    http_response_code($code);

    require "view/{$code}.php";

    die();
}

routeToControllers($url, $routes);
// switch($url){
//     case '/':
//         require __DIR__.'/controllers/index.php';
//         break;
//     case '/about':
//         require __DIR__.'/controllers/about.php';
//         break;
//     case '/contact';
//         require __DIR__.'/controllers/contact.php';
//     default:
//         $fileUrl = '/controllers/404.php';
//         break;
// }

// $fileUrl = match($url){
//     '/' => '/controllers/index.php',
//     '/about' => '/controllers/about.php',
//     '/contact' => '/controllers/contact.php',
//     default => '/controllers/404.php'
// };

// dd($fileUrl);
// require $fileUrl;