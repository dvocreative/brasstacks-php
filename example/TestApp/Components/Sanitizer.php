<?php

namespace TestApp\Components;

use BrassTacks\ComponentInterface\Sanitizer as BTSanitizer;

class Sanitizer implements BTSanitizer {

    public function sanitize($request) {

        //this layer is pretty self-explanatory

        $request->parameters = array_map(function($val){

            return mysql_real_escape_string($val);

        }, $request->parameters);

        return $request;

    }

}