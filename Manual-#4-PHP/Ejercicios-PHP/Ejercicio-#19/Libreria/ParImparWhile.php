<?php
/**
* Ejercicio: Par O Impar Con While.
* Autor: Juan Pablo Saavedra Chambo.
* Fecha: 7/05/2024
*/

$numero = 5;
$contar = 0;

while ($contar <= $numero) {
    $contar = $contar + 1;

    if ($contar % 2 == 0) {
        var_dump($contar . " Es Par.");
        echo "</br>";
        echo "</br>";

    } else {
        var_dump($contar . " Es Impar.");
        echo "</br>";
        echo "</br>";
    }
}
?>
