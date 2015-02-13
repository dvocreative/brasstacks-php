<?php

namespace TestApp\Components;
use BrassTacks\ComponentInterface\Formatter as BTFormatter;

class Formatter implements BTFormatter {

    public function __construct() {



    }

    public function format($response = array()) {

        return $response;

    }

}