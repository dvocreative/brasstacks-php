<?php

namespace BrassTacks;
use BrassTacks\ComponentInterface;

class App {

    protected $request = null;
    protected $session = null;
    protected $state = null;
    protected $response = null;

    public function __construct($configuration = array()) {

        $this->conf = $configuration;

    }

    public function run($request = array()) {

        $this->request = $request;

        //sanitize
        if (isset($this->conf['components']['sanitizer'])) {
            $this->request = $this->conf['components']['sanitizer']->sanitize($this->request);
        }

        //authenticate
        if (isset($this->conf['components']['authenticator'])) {
            $this->session = $this->conf['components']['authenticator']->authenticate($this->request);
        }

        //decorate
        $this->state = (isset($this->conf['components']['decorator']))
            ? $this->conf['components']['decorator']->decorate($this->request, $this->session)
            : $this->session;

        //route
        if (isset($this->conf['components']['router'])) {
            $this->response = $this->conf['components']['router']->route($this->request, $this->state);
        }

        //format
        if (isset($this->conf['components']['formatter'])) {
            $this->response = $this->conf['components']['formatter']->format($this->response);
        }

    }

    public function dump() {

        return $this->response;

    }

}
