<?php

namespace TestApp\Components;
use BrassTacks\ComponentInterface\Formatter as BTFormatter;

class Formatter implements BTFormatter {

    public function __construct() {



    }

    public function format($response) {

        return json_encode([
            'success' => $response->success,
            'data' => $response->data
        ]);

    }

}