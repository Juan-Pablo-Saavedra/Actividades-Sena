<?php
/**
* Ejercicio: Tablas Con For.
* Autor: Juan Pablo Saavedra Chambo.
* Fecha: 7/05/2024
*/


$numero1 = null;
$numero2 = 5;
$numero3 = null;
$numero4 = 5;
$pares = 0;
$impares = 0;
$resultado = null;

for ($numero1 = 1; $numero1 <= $numero2; $numero1++) {
    
    for ($numero3 = 1; $numero3 <= $numero4; $numero3++) {

        $resultado = $numero1 * $numero3;

        if ($resultado % 2 == 0) {
            var_dump($numero1 . "x" . $numero3 . "=" . $resultado . " Buzz");
            $pares++;
            echo "<br>";
            echo "<br>";

        } else {
            var_dump($numero1 . "x" . $numero3 . "=" . $resultado . " Bass");
            $impares++;
            echo "<br>";
            echo "<br>";
        }
    }
}

// Imprimir cantidad de Buzz y Bass
var_dump("Cantidad de Buzz = " . $pares);
echo "<br>";
echo "<br>";

var_dump("Cantidad de Bass = " . $impares);
echo "<br>";
echo "<br>";
 
?>
