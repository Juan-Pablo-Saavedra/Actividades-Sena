<?php
/**
 * Función para imprimir cuál es el mayor de 3 números 
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function may($pnum1, $pnum2, $pnum3) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $num3 = $pnum3;
    if (floatval($num1) == floatval($num2) && floatval($num1) == floatval($num3) && floatval($num2) == floatval($num3)) {
        return var_dump("Los 3 números digitados son iguales");
    } else {
        if (floatval($num1) > floatval($num2) && floatval($num1) > floatval($num3)) {
            return $num1;
        } else {
            if (floatval($num2) > floatval($num1) && floatval($num2) > floatval($num3)) {
                return $num2;
            } else {
                return $num3;
            }
        }
    }
}


$numMayor = may(5, 10, 3);

var_dump("El número mayor es: " . $numMayor);

?>
