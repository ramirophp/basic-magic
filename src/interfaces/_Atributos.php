<?php

namespace Rmo\interface;

interface _Etiqueta {
    public function setAtributos (array $atributos);
    public function getAtributos () : string;
    public function printAtributos();
    public function __construct (array $atributos = []);
}