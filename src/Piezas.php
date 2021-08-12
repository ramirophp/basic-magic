<?php

namespace Rmo;
use Rmo\interface\_Piezas;

class Piezas implements _Piezas {

    public static function parte_1 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas) {
        setChar($_char,'<');
        setChar($_char_,'>');
        setTag($etiquetas,getChar($_char) . 'section' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_2 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo getSpaces($espacios);
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_3 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,2);
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_4 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,3); 
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    } 

    public static function parte_5 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios, \Rmo\Espacios $_espacios) {
        echo mltSpaces($espacios,4);  
        setTag($etiquetas,getChar($_char) . 'h1' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"Big data");
        setTag($etiquetas,getChar($_char) . getChar($char) . 'h1' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_6 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,3); 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_7 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,2); 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_8 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios, \Rmo\Espacios $_espacios) {
        echo mltSpaces($espacios,2); 
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"blank space , just for la maquetacion foo XD");
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_9 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,2); 
        setTag($etiquetas,getChar($_char) . 'img' . getChar($char) . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_10 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo getSpaces($espacios);
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_11 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo getSpaces($espacios); 
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_12 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,2);
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_13 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,3); 
        setTag($etiquetas,getChar($_char) . 'p' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_14 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios, \Rmo\Espacios $_espacios) {
        echo mltSpaces($espacios,4);  
        setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"Gran volumen");
        setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"de informacion.");
    }

    public static function parte_15 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios, \Rmo\Espacios $_espacios) {
        echo mltSpaces($espacios,4); 
        echo "Las empresas&nbsp;"; 
        setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"almacenan");
        setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"datos diariamente.");
    }

    public static function parte_16 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios, \Rmo\Espacios $_espacios) {
        echo mltSpaces($espacios,4); 
        setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"costos,eficiencia,entender");
        setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
        prtTag($etiquetas);
        echo txtBtwSps($_espacios,"a los clientes.");
    }

    public static function parte_17 (\Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,4);echo "Solucion matematica a un problema de negocio.";
    }

    public static function parte_18 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,3);
        setTag($etiquetas,getChar($_char) . getChar($char) . 'p' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_19 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,2); 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_20 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas, \Rmo\Espacios $espacios) {
        echo mltSpaces($espacios,1); 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    }

    public static function parte_21 (\Rmo\Magic $_char, \Rmo\Magic $_char_, \Rmo\Magic $char, \Rmo\Etiqueta $etiquetas) {
        setTag($etiquetas,getChar($_char) . getChar($char) . 'section' . getChar($_char_));
        prtTag($etiquetas);
    }
    
}