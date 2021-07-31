<?php

if (!function_exists('setAttrs')) {
    function setAttrs (Rmo\Atributos $instance, array $attrs) {
        $instance->setAtributos($attrs);
    }
}

if (!function_exists('getAttrs')) {
    function getAttrs (Rmo\Atributos $instance) {
        return $instance->getAtributos();
    }
}

if (!function_exists('prtAttrs')) {
    function prtAttrs (Rmo\Atributos $instance) {
        $instance->printAtributos();
    }
}