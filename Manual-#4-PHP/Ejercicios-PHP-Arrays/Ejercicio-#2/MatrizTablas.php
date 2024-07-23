<?php
/**
 * Ejercicio: Matriz para imprimir la tabla del 5 decir cuales son los pares e impares y la suma de los pares e impares.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */

 $tabla5 = [];
 $paresTabla5 = [];
 $imparesTabla5 = [];
 $contador = 1;
 $sumaParesTabla5 = 0;
 $sumaImparesTabla5 = 0;
 
 for ($fila = 0; $fila < 5; $fila++) {
     $tabla5[$fila] = [];
     for ($columna = 0; $columna < 5; $columna++) {
         $tabla5[$fila][$columna] = $contador * 5;
         $contador++;
         if ($tabla5[$fila][$columna] % 2 == 0) {
             $paresTabla5[] = $tabla5[$fila][$columna];
         } else {
             $imparesTabla5[] = $tabla5[$fila][$columna];
         }
 
         $sumaParesTabla5 = array_sum($paresTabla5);
         $sumaImparesTabla5 = array_sum($imparesTabla5);
     }
 }
 
 var_dump("Matriz 5: " . json_encode($tabla5) . "<br><br>");
 
 var_dump("Pares de la tabla del 5: " . implode(", ", $paresTabla5) . "<br><br>");
 
 var_dump("Impares de la tabla del 5: " . implode(", ", $imparesTabla5) . "<br><br>");
 
 var_dump("La suma total de los pares de la tabla del 5 es " . $sumaParesTabla5 . "<br><br>");
 
 var_dump("La suma total de los impares de la tabla del 5 es " . $sumaImparesTabla5 . "<br><br>");
 
 // tabla del 9
 $tabla9 = [];
 $paresTabla9 = [];
 $imparesTabla9 = [];
 $multiplicador = 1;
 $sumaParesTabla9 = 0;
 $sumaImparesTabla9 = 0;
 
 for ($fila = 0; $fila < 5; $fila++) {
     $tabla9[$fila] = [];
     for ($columna = 0; $columna < 5; $columna++) {
         $tabla9[$fila][$columna] = $multiplicador * 9;
         $multiplicador++;
         if ($tabla9[$fila][$columna] % 2 == 0) {
             $paresTabla9[] = $tabla9[$fila][$columna];
         } else {
             $imparesTabla9[] = $tabla9[$fila][$columna];
         }
 
         $sumaParesTabla9 = array_sum($paresTabla9);
         $sumaImparesTabla9 = array_sum($imparesTabla9);
     }
 }
 
 var_dump("Matriz 9: " . json_encode($tabla9) . "<br><br>");
 
 var_dump("Pares de la tabla del 9: " . implode(", ", $paresTabla9) . "<br><br>");
 
 var_dump("Impares de la tabla del 9: " . implode(", ", $imparesTabla9) . "<br><br>");
 
 var_dump("La suma total de los pares de la tabla del 9 es " . $sumaParesTabla9 . "<br><br>");
 
 var_dump("La suma total de los impares de la tabla del 9 es " . $sumaImparesTabla9 . "<br><br>");
?>
