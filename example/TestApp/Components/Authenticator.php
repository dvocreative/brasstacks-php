<?php

namespace TestApp\Components;
use BrassTacks\ComponentInterface\Authenticator as BTAuthenticator;

class Authenticator implements BTAuthenticator {

    public function __construct() {

    }

    public function authenticate($request = array()) {

        return array();

    }

    public function isAuthenticated() {

    }

}