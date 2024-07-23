<?php
/**
* Ejercicio: Tablas.
* Autor: Juan Pablo Saavedra Chambo.
* Fecha: 7/05/2024
*/


$numero1 = 0;
$numero2 = 5;
$numero4 = 5;
$contarPar = 0;
$contarImpar = 0;
$resultado = 0;

while ($numero1 < $numero2) {
    $numero1++;
    $numero3 = 0;

    while ($numero3 < $numero4) {
        $numero3++;
        $resultado = $numero1 * $numero3;

       
        if ($resultado % 2 == 0) {
            var_dump($numero1 . "x" . $numero3 . "=" . $resultado . " Buzz\n");
            $contarPar++;
            echo "<br>";
            echo "<br>";

        } else {
            var_dump($numero1 . "x" . $numero3 . "=" . $resultado . " Bass\n");
            $contarImpar++;
            echo "<br>";
            echo "<br>";
        }
    }
}


var_dump("Cantidad de Buzz = " . $contarPar . "\n");
echo "<br>";
echo "<br>";

var_dump("Cantidad de Bass = " . $contarImpar . "\n");
echo "<br>";
echo "<br>";

 
?>
