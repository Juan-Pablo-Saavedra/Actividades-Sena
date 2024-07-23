<?php 
/**
 * Ejercicio: Imprime Las Areas De El Cuadrado, Rectangulo Y El Triangulo.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$cuadrado;
$rectangulo; 
$triangulo;

$lado = 14;
$base1 = 10;
$base2 = 5;
$base3 = 13;
$altura1 = 19;
$altura2 = 17;

$cuadrado = $lado * $lado;
$rectangulo = $base1 * $altura1;
$triangulo = $base2 * $altura2 / 2;

var_dump("El Area Del Cuadrado Es: ",+$cuadrado);
echo("</br>");
echo("</br>");

var_dump("El Area Del Rectangulo Es: ",+$rectangulo);
echo("</br>");
echo("</br>");

var_dump("El Area Del Triangulo Es: ",+$triangulo);
echo("</br>");
echo("</br>");

?>