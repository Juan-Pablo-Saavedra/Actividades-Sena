<?php
/**
 * Función para hacer una tabla de multiplicar hasta 10 del número ingresado
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function mult($pnum){
    $num = $pnum;
    $multi  = "";
    $res = "";
    for ($con = 1; $con <= 10; $con++) {
        $res = $num * $con;
        $multi .= "$num x $con = $res <br>";
    }
    return $multi;
}


$numero = 22; 
var_dump("Tabla de multiplicar del $numero hasta el 10: <br>" . mult($numero));

?>
