<?php
/**
 * Ejercicio: Contar del 1 al 10 y decir cuales son los pares e impares.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */

 $numeros = [];
 $pares = [];
 $impares = [];
 
 for ($longitud = 1; $longitud <= 10; $longitud++) {
     $numeros[] = $longitud; 
 
     if ($longitud % 2 === 0) {
         $pares[] = $longitud; 
     } else {
         $impares[] = $longitud; 
     }
 }
 
 var_dump("Los números del 1 al 10: " . implode(", ", $numeros) . "<br><br>");
 var_dump("Números pares: " . implode(", ", $pares) . "<br><br>");
 var_dump("Números impares: " . implode(", ", $impares) . "<br><br>");
 
?>

