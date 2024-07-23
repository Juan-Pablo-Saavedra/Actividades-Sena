<?php
/**
 * Función para calcular la nota de una persona
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function pornot($pnot, $pporc) {
    $not = $pnot;
    $porce = $pporc;
    $rnot = $not * $porce;
    return $rnot;
}

function suma($pnumUno, $pnumDos, $pnumTre) {
    $numUno = $pnumUno;
    $numDos = $pnumDos;
    $numTre = $pnumTre;
    $sumar = $numUno + $numDos + $numTre;
    return $sumar;
}

function may($psuma){
    $suma = $psuma;
    if ($suma > 4.5) {
        return "Su nota final es superior.";
    } else {
        if ($suma <= 4.5 && $suma > 3.5) {
            return "Su nota final es buena.";
        } else {
            if ($suma <= 3.5 && $suma > 3) {
                return "Su nota final es media.";
            } else {
                return "Su nota final es mala.";
            }
        }
    }
}

$nota1 = 3.5;
$nota2 = 4.0;
$nota3 = 4.2;

$sumaNotas = suma($nota1, $nota2, $nota3);

echo "La suma de las notas es: " . $sumaNotas;
echo "<br>";
echo "<br>";

echo may($sumaNotas);

?>

