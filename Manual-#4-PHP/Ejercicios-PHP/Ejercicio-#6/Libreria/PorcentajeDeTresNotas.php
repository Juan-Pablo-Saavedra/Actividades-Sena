<?php 
/**
 * Ejercicio: Calcular El Porcentaje De 3 Notas Y Sumarlos.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$porcentaje1;
$porcentaje2;
$porcentaje3;

$nota1 = 4.3;
$nota2 = 3.5;
$nota3 = 3.2;

$porcentaje1 = $nota1 * 30 / 100;

$porcentaje2 = $nota2 * 30 / 100;

$porcentaje3 = $nota3 * 40 / 100;

var_dump("El Primer Porcentaje Es:",+$porcentaje1);

echo("</br>");
echo("</br>");

var_dump("El Segundo Porcentaje Es:",+$porcentaje2);

echo("</br>");
echo("</br>");

var_dump("El Tercer Porcentaje Es:",+$porcentaje3);

echo("</br>");
echo("</br>");

$suma = $porcentaje1 + $porcentaje2 + $porcentaje3;

var_dump("La Suma De Los 3 Porcentajes Es:",+$suma);

?>