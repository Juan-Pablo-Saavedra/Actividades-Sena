<?php

/**
 * Ejercicio: Calcular E Imprimir El Promedio Y Si El Promedio Cumple Con La Mayoria De Edad.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$edad1;
$edad2;
$edad3;

$prom;
$suma;
$anoNacio1 = 2000;
$anoNacio2 = 2006;
$anoNacio3 = 2009;
$anoActu = 2024;

$edad1 = $anoActu - $anoNacio1;
$edad2 = $anoActu - $anoNacio2;
$edad3 = $anoActu - $anoNacio3;

if ($edad1 > 17) {

    var_dump("Es mayor de edad\n");

    echo("</br>");
    echo("</br>");

} else {

    var_dump("Es menor de edad\n");

    echo("</br>");
    echo("</br>");
}

if ($edad2 > 17) {

    var_dump("Es mayor de edad\n");

    echo("</br>");
    echo("</br>");

} else {
    
    var_dump("Es menor de edad\n");

    echo("</br>");
    echo("</br>");
}

if ($edad3 > 17) {
   
    var_dump("Es mayor de edad\n");

    echo("</br>");
    echo("</br>");

} else {
    
    var_dump("Es menor de edad\n");

    echo("</br>");
    echo("</br>");

}

$suma = $edad1 + $edad2 + $edad3;
$prom = $suma / 3;

if ($prom > 17) {
    var_dump("El promedio de las tres edades es $prom y cumple con la mayoría de edad.\n");
} else {
    var_dump("El promedio no cumple con la mayoría de edad.\n");
}
?>
