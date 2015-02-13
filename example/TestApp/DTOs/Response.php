<?php

namespace TestApp\DTOs;

class Response {

    public $success;
    public $data;

    public function __construct($success = false, $data) {
        $this->success = $success;
        $this->data = $data;
    }

}
