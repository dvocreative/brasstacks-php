<?php

namespace BrassTacks\ComponentInterface;

interface Decorator {

    //decorate the session, returns a state
    public function decorate($request, $session);

}