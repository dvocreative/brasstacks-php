<?php

namespace BrassTacks\ComponentInterface;

interface Router {

    //add one or more routes
    public function addRoute($opts);

    //execute the route
    public function route($opts);

}