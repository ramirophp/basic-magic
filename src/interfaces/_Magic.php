<?php

namespace Rmo\interface;

interface _Magic {
    public function setCaracter (string $char);
    public function getCaracter ();
    public function __construct (string $char = '/');
}