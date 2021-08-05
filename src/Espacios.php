<?php

namespace Rmo;
use Rmo\interface\_Espacios;

class Espacios implements _Espacios {

    private int $cantidad;

    public function setCantidad (int $cantidad) {
        $this->cantidad = $cantidad;
    }

    public function getCantidad () {
        return $this->cantidad;
    }

    public function getEspacios () {
        $spaces = '';
        for ($i = 0; $i < $this->getCantidad(); $i++) {
            $spaces .= '&nbsp;';
        }
        return $spaces;
    }

    public function multiplicaEspacios (int $por) {
        $spaces = '';
        for ($i = 0; $i < $this->getCantidad()*$por; $i++) {
            $spaces .= '&nbsp;';
        }
        return $spaces;
    }

    public function __construct (int $espacios = 4) {
        $this->cantidad = $espacios;
    }

}