<?php

namespace TestApp\Components;

use TestApp\DTOs\State;
use BrassTacks\ComponentInterface\Decorator as BTDecorator;

class Decorator implements BTDecorator {

    public function decorate($request = array(), $session = array()) {

        //Taking in the session data we may want to grab addition stuff before the Router,
        //such as do a query to get info about the User's company

        $state = new State();

        return $state;

    }

}