<?php

namespace TestApp\Components;
use BrassTacks\ComponentInterface\Router as BTRouter;
use \Klein\Klein;

class Router implements BTRouter {

    public function __construct() {

        $this->router = new Klein();

    }

    public function route($configs = array()) {

        $this->router->dispatch(null, null, false);

    }

    public function addRoute($route = array()) {

        $this->router->respond(
            (isset($route['type'])) ? $route['type'] : 'GET',
            (isset($route['url'])) ? $route['url'] : '/',
            (isset($route['callback'])) ? $route['callback'] : function(){
                return true;
            }
        );

    }

}