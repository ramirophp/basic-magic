<?php

namespace Rmo;
use Rmo\interface\_Atributos;

class Atributos implements _Atributos {

    private string $atributos;

    public function setAtributos (array $atributos) {
        $attributes = '';

        foreach ($atributos as $key => $value) {

            $key = htmlspecialchars($key);

            $value = htmlspecialchars($value);

            if ($key === '!') {

                $tmpAttrs = explode(' ',$value);

                for($i = 0; $i < count($tmpAttrs); $i++) {

                    $attributes .= ' ' . $tmpAttrs[$i];

                }

            } else {

                $attributes .= ' '.$key.'="'.$value.'"';

            }

        }

        $this->atributos = $attributes;
    }

    public function getAtributos () : string {
        return $this->atributos;
    }

    public function printAtributos() {
        echo $this->getAtributos();
    }

    public function __construct (array $atributos = []) {
        $this->setAtributos($atributos);
    }

}