<?php
/**
 * Función para contar el número que ingrese el usuario
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function cont($pnum){
    $num = $pnum;
    $con = 0;
    $res = "";
    while($con < $num){
        $con = $con + 1;
        $res .= $con . "\n";
    }
    return $res;
}

$numero = 9; 

var_dump(cont($numero));

?>
