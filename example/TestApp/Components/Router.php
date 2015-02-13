<?php

namespace TestApp\Components;

use BrassTacks\ComponentInterface\Router as BTRouter;

use \Klein\Klein;
use \Klein\Request as KleinRequest;

use TestApp\DTOs\Response;

class Router implements BTRouter {

    public function __construct($routes = array()) {

        //initialize our third-party routing library
        $this->router = new Klein();

        //apply our raw routes to the library, just how it likes them

        foreach ($routes as $route) {
            $this->router->respond($route[0], $route[1], $route[2]);
        }

    }

    public function route($request = array()) {

        //In this example we're using the Klein router. Note that we could have just
        //used the native Klein request object from the beginning (it also does sanitization), but this shows how versatile
        //and abstract you can be.

        $kleinReq = new KleinRequest(
            $request->raw->get,
            $request->raw->post,
            $request->raw->cookie,
            $request->raw->files
        );

        $this->router->dispatch($kleinReq, null, false);

        $response = new Response(true, $this->router->response()->body());

        return $response;

    }

}