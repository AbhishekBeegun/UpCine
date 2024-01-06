<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        include('index.php');
        break;

    case '/about':
        include('about.php');
        break;

    case '/contact':
        include('contact.php');
        break;

    case (strpos($uri, '/user/') === 0):
        include('./user.php');
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}