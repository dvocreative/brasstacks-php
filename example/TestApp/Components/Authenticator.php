<?php

namespace TestApp\Components;

use TestApp\DTOs\Session;
use BrassTacks\ComponentInterface\Authenticator as BTAuthenticator;

class Authenticator implements BTAuthenticator {

    public function __construct() {

    }

    public function authenticate($request = array()) {

        //this class would trigger whatever auth libraries you want,
        //then based on the request spit out the result in some consistent way via the Session object

        $session = new Session();

        return $session;

    }

    public function isAuthenticated() {

    }

}