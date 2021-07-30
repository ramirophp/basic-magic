<?php

namespace Rmo\interface;

interface _Etiqueta {
    public function setEtiqueta (string $etiqueta);
    public function getEtiqueta () : string;
    public function printEtiqueta ();
    public function html5 (string $doctype);
    public function __construct (string $etiqueta = '');
}