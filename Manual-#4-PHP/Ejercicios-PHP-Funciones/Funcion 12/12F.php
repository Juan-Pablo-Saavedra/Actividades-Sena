<?php
/**
 * Función para calcular el área de 3 cuadrados e imprimir cuál tiene el mayor área
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function areacuad($plado){
    $lado = $plado;
    $cuadrado = $lado * $lado;
    return $cuadrado;
}

function may($pcu1, $pcu2, $pcu3){
    $cu1 = $pcu1;
    $cu2 = $pcu2;
    $cu3 = $pcu3;

    if ($cu1 == $cu2 && $cu1 == $cu3 && $cu2 == $cu3) {
        return var_dump("ERROR: SON IGUALES");
    }
    else{
        if ($cu1 > $cu2 && $cu1 > $cu3) {
            return $cu1;
        }
        else{
            if ($cu2 > $cu1 && $cu2 > $cu3) {
                return $cu2;
            }
            else{
                return $cu3;
            }
        }
    }
}

$area1 = areacuad(5);
$area2 = areacuad(8);
$area3 = areacuad(6);

$mayorArea = may($area1, $area2, $area3);
var_dump("El cuadrado con el área más grande tiene un área de: " . $mayorArea);

?>
