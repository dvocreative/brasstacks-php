<?php

require 'vendor/autoload.php';

$_request = new TestApp\DTOs\Request($_GET, $_POST, $_COOKIE, $_SERVER, $_FILES, (!empty($_SESSION)) ? $_SESSION : null);

$router = new TestApp\Components\Router([
    [ 'GET', '/', function($req, $resp) {
        $resp->append('hello!');
    }]
]);

$configuration = [
    'components' => [
        'sanitizer' => new TestApp\Components\Sanitizer(),
        'authenticator' => new TestApp\Components\Authenticator(),
        'decorator' => new TestApp\Components\Decorator(),
        'router' => $router,
        'formatter' => new TestApp\Components\Formatter()
    ]
];

$app = new BrassTacks\App($configuration);

$app->run($_request);

echo $app->dump();
