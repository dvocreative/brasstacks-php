<?php

namespace TestApp\Components;

use BrassTacks\ComponentInterface\Sanitizer as BTSanitizer;

class Sanitizer implements BTSanitizer {

    public function __construct() {



    }

    public function sanitize($request) {

        $request->parameters = array_map(function($val){
            return $val;
        }, $request->parameters);

        return $request;

    }

}