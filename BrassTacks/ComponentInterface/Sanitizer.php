<?php

namespace BrassTacks\ComponentInterface;

interface Sanitizer {

    //sanitize the request
    public function sanitize($request);

}