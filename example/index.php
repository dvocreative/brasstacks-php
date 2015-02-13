<?php

require 'vendor/autoload.php';

//pre-massage any of your components

$_request = new TestApp\DTOs\Request($_GET, $_POST, $_COOKIE, $_SERVER, $_FILES, (!empty($_SESSION)) ? $_SESSION : null);

$router = new TestApp\Components\Router([
    [ 'GET', '/', function($req, $resp) {
        $resp->append('hello!');
    }]
]);

//put together the config

$configuration = [
    'components' => [
        'sanitizer' => new TestApp\Components\Sanitizer(),
        'authenticator' => new TestApp\Components\Authenticator(),
        'decorator' => new TestApp\Components\Decorator(),
        'router' => $router,
        'formatter' => new TestApp\Components\Formatter()
    ]
];

//pass it in

$app = new BrassTacks\App($configuration);

//run it

$app->run($_request);

//dump it (with whatever headers you want)

header('Content-Type: application/json');
echo $app->dump();

