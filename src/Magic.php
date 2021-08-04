<?php

namespace Rmo;
use Rmo\interface\_Magic;

class Magic implements _Magic {

    private string $char;

    public function setCaracter (string $char) {
        if($char === '/' || $char === '<' || $char === '>') {
            $this->char = $char;
        }
    }

    public function getCaracter () {
        return $this->char;
    }

    public function __construct (string $char = '/') {
        $this->char = $char;
    }

}