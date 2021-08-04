<?php

if (!function_exists('setChar')) {
    function setChar (Rmo\Magic $instance, string $char) {
        $instance->setCaracter($char);
    }
}

if (!function_exists('getChar')) {
    function getChar (Rmo\Magic $instance) {
        return $instance->getCaracter();
    }
}