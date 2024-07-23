<?php
/**
 * Función para hacer el factorial del número ingresado
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function fact($pnum){
    $num = $pnum;
    $fac = 1;
    for ($con = 1; $con <= $num; $con++) {
        $fac = floatval($fac) * floatval($con);
    }
    return $fac;
}


$numero = 3; 
echo "El factorial de $numero es: " . fact($numero);

?>
