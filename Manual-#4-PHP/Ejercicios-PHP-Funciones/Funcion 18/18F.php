<?php
/**
 * Función para hacer la tabla de multiplicar hasta 10 del número ingresado
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
        $multi .= "<br>". " ".$num . " x " . $con . " = " . $res;
    }
    return $multi;
}


$numero = 7; 
var_dump("Tabla de multiplicar del $numero hasta el 10:" . mult($numero));
echo "<br>";
echo "<br>";

?>
