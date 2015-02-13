<?php

namespace BrassTacks\ComponentInterface;

interface Authenticator {

    //do an authentication check
    public function isAuthenticated();

    //perform authentication
    public function authenticate($opts);

}