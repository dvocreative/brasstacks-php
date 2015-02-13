<?php

namespace TestApp\DTOs;

class Request {

    public $request;

    public function __construct($GET, $POST, $COOKIE, $SERVER, $FILES, $SESSION) {

        $this->raw = (object) [
            'get' => $GET,
            'post' => $POST,
            'cookie' => $COOKIE,
            'server' => $SERVER,
            'files' => $FILES
        ];

        $this->parameters = array_merge($GET, $POST);

    }

}