<?php

namespace Rmo;
use Rmo\interface\_Etiqueta;

class Etiqueta implements _Etiqueta{

    private string $etiqueta;

    public function setEtiqueta (string $etiqueta) {
        $this->etiqueta = htmlspecialchars($etiqueta);
    }

    public function getEtiqueta () : string {
        return $this->etiqueta;
    }

    public function printEtiqueta () {
        echo $this->getEtiqueta();
    }

    public function html5 (string $doctype) {
        if ($doctype === 'doctype') {
            $_ = '!';
            $DOC = strtoupper($doctype);
            return "$_$DOC";
        } else {
            die('value not valid.');
        }
    }

    public function __construct (string $etiqueta = '') {
        $this->etiqueta = $etiqueta;
    }

}