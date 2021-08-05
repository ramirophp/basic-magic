<?php

namespace Rmo\interface;

interface _Espacios {
    public function setCantidad (int $cantidad);
    public function getCantidad ();
    public function __construct (int $espacios = 4);
    public function getEspacios ();
    public function multiplicaEspacios (int $por);
}