<?php

if (!function_exists('setTag')) {
    function setTag (Rmo\Etiqueta $instance, string $tag) {
        $instance->setEtiqueta($tag);
    }
}

if (!function_exists('getTag')) {
    function getTag (Rmo\Etiqueta $instance) {
        return $instance->getEtiqueta();
    }
}

if (!function_exists('html5')) {
    function html5 (Rmo\Etiqueta $instance, string $doc) {
        return $instance->html5($doc);
    }
}

if (!function_exists('prtTag')) {
    function prtTag (Rmo\Etiqueta $instance) {
        $instance->printEtiqueta();
    }
}