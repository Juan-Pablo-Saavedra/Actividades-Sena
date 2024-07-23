<?php
/**
 * Función para contar hasta el número ingresado
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function cont($pnum){
    $num = $pnum;
    $res = "";
    for ($con = 1; $con <= $num; $con++) {
        $res .= $con . "<br>";
    }
    return $res;
}


$numero = 7; 
var_dump("Contando hasta $numero: <br>" . cont($numero));

?>
