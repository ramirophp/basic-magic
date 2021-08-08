"# basic-magic"  Installation $ composer install

<h3>Parte 1.</h3>

<h2>_Etiqueta & Etiqueta</h2>
<h3><em>Interface & Class</em></h3>

<h2>Methods</h2>

<ol>
    <li>setEtiqueta (string)</li>
    <li>getEtiqueta () : string</li>
    <li>printEtiqueta ()</li>
    <li>html5 (string $doctype)</li>
    <li>__construct (string $etiqueta = '')</li>
</ol>

<h2>Tools</h2>

<ol>
    <li><i>setTag (Rmo\Etiqueta $instance, string $tag);</i></li>
    <li><i>getTag (Rmo\Etiqueta $instance);</i></li>
    <li><i>html5 (Rmo\Etiqueta $instance, string $doc);</i></li>
    <li><i>prtTag (Rmo\Etiqueta $instance);</i></li>
</ol>

<hr>

<h3>Parte 2.</h3>

<h2>_Atributos & Atributos</h2>
<h3><em>Interface & Class</em></h3>

<h2>Methods</h2>

<ol>
    <li>setAtributos (array $atributos)</li>
    <li>getAtributos () : string</li>
    <li>printAtributos()</li>
    <li>__construct (array $atributos = [])</li>
</ol>

<h2>Tools</h2>

<ol>
    <li><i>setAttrs (Rmo\Atributos $instance, array $attrs);</i></li>
    <li><i>getAttrs (Rmo\Atributos $instance);</i></li>
    <li><i>prtAttrs (Rmo\Atributos $instance);</i></li>
</ol>

<hr>

<h3>Parte 3.</h3>

<h2>_Magic & Magic</h2>
<h3><em>Interface & Class</em></h3>

<h2>Methods</h2>

<ol>
    <li>setCaracter (string $char)</li>
    <li>getCaracter ()</li>
    <li>__construct (string $char = '/')</li>
</ol>

<h2>Tools</h2>

<ol>
    <li><i>setChar (Rmo\Magic $instance, string $char);</i></li>
    <li><i>getChar (Rmo\Magic $instance);</i></li>
</ol>

<hr>

<h3>Parte 4.</h3>

<h2>_Espacios & Espacios</h2>
<h3><em>Interface & Class</em></h3>

<h2>Methods</h2>

<ol>
    <li>setCantidad (int $cantidad)</li>
    <li>getCantidad ()</li>
    <li>getEspacios ()</li>
    <li>multiplicaEspacios (int $por)</li>
    <li>__construct (int $espacios = 4)</li>
</ol>

<h2>Tools</h2>

<ol>
    <li><i>setCant (Rmo\Espacios $instance, int $cantidad);</i></li>
    <li><i>getCant (Rmo\Espacios $instance);</i></li>
    <li><i>getSpaces (Rmo\Espacios $instance);</i></li>
    <li><i>mltSpaces (Rmo\Espacios $instance, int $by);</i></li>
    <li><i>txtBtwSps (Rmo\Espacios $instance, string $text);</i></li>
</ol>

<hr>

<h3>Parte 5.</h3>

<h4>
<em>
<pre>
Antes de crear informacion 
dinamicamente, es necesario 
partir de un analisis de la 
siguiente estructura de 
informacion estatica.
</pre>
</em>
</h4>

<h2>_Piezas & Piezas</h2>
<h3><em>Interface & Class</em></h3>

<h2>Methods</h2>

<ol>
    <li>public static function parte_1 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas)</li>
    <li>public static function parte_2 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_3 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_4 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_5 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $_espacios)</li>
    <li>public static function parte_6 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_7 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_8 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios)</li>
    <li>public static function parte_9 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_10 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_11 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_12 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_13 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_14 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios)</li>
    <li>public static function parte_15 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios)</li>
    <li>public static function parte_16 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios)</li>
    <li>public static function parte_17 (Rmo\Espacios $espacios)</li>
    <li>public static function parte_18 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_19 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_20 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios)</li>
    <li>public static function parte_21 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas)</li>
</ol>

<h2>Tools</h2>

<ol>
    <li><i>parte_1 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas);</i></li>
    <li><i>parte_2 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_3 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_4 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_5 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $_espacios);</i></li>
    <li><i>parte_6 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_7 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_8 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios);</i></li>
    <li><i>parte_9 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_10 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_11 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_12 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_13 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_14 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios);</i></li>
    <li><i>parte_15 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios);</i></li>
    <li><i>parte_16 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios, Rmo\Espacios $_espacios);</i></li>
    <li><i>parte_17 (Rmo\Espacios $espacios);</i></li>
    <li><i>parte_18 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_19 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_20 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas, Rmo\Espacios $espacios);</i></li>
    <li><i>parte_21 (Rmo\Magic $_char, Rmo\Magic $_char_, Rmo\Magic $char, Rmo\Etiqueta $etiquetas);</i></li>
</ol>