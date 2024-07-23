<?php
/**
 * Función para hacer el factorial del número que sea ingresado
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function fact($pnum){
    $num = $pnum;
    $con = 0;
    $fac = 1;
    while ($con < $num) {
        $con = intval($con) + 1;
        $fac = floatval($fac) * floatval($con);
    }
    return $fac;
}


$numero = 2; 

var_dump("El factorial de $numero es: " . fact($numero));

?>
