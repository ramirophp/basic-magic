<?php

if (!function_exists('setCant')) {
    function setCant (Rmo\Espacios $instance, int $cantidad) {
        $instance->setCantidad($cantidad);
    }
}

if (!function_exists('getCant')) {
    function getCant (Rmo\Espacios $instance) {
        return $instance->getCantidad();
    }
}

if (!function_exists('getSpaces')) {
    function getSpaces (Rmo\Espacios $instance) {
        return $instance->getEspacios();
    }
}

if (!function_exists('mltSpaces')) {
    function mltSpaces (Rmo\Espacios $instance, int $by) {
        return $instance->multiplicaEspacios($by);
    }
}

if (!function_exists('txtBtwSps')) {
    function txtBtwSps (Rmo\Espacios $instance, string $text) {
        $instance->setCantidad(1);
        return $instance->getEspacios() . htmlspecialchars($text) . $instance->getEspacios();
    }
}