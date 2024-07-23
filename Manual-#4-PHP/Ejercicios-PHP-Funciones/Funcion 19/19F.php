<?php
/**
 * Función para hacer una tabla de multiplicar hasta 10 y decir si el resultado es par o impar
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function mult($pnum){
    $num = $pnum;
    $con = 0;
    $res = 0;
    $multi = "";
    while ($con < 10) {
        $con = $con + 1;
        $res = $num * $con;
        if ($res % 2 == 0) {
            $multi .= "$res Es par". "<br>";
        } else {
            $multi .= "$res Es impar". "<br>";
        }
    }
    return $multi;
}


$numero = 5; 
var_dump("Tabla de multiplicar del $numero hasta el 10 y su paridad: <br>". mult($numero));

?>
