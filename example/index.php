<?php

require 'vendor/autoload.php';

$router = new TestApp\Components\Router();

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

$app->run($_REQUEST);

echo $app->dump();
