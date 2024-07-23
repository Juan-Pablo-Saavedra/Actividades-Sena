<?php
/**
 * Ejercicio: Imprimir una lista de numeros.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */


 $numeros = [1, 2, 3, 4, 5];
 $primerNumero = $numeros[0];
 $segundoNumero = $numeros[2];
 $tercerNumero = $numeros[4];
 $cantidad = count($numeros);
 for ($iteracion = 0; $iteracion < $cantidad; $iteracion++) {
     var_dump($numeros[$iteracion] . "<br> <br>");
 }
 
?>
