<?php
 /**
 * Ejercicio: Porcentaje De 3 Notas y Decir cual es superior, buena o mala.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */


 $nota1 = 3.5;
 $nota2 = 2.4;
 $nota3 = 4.6;

 $porc1;
 $porc2;
 $porc3;
 

 $porc1 = $nota1 * (20 / 100);
 $porc2 = $nota2 * (35 / 100);
 $porc3 = $nota3 * (45 / 100);
 

 var_dump("Porcentaje de la nota 1 es " . $porc1 . "\n");
 echo("</br>");
 echo("</br>");

 var_dump("Porcentaje de la nota 2 es " . $porc2 . "\n");
 echo("</br>");
 echo("</br>");

 var_dump("Porcentaje de la nota 3 es " . $porc3 . "\n");
 echo("</br>");
 echo("</br>");
 
 // Calcular la suma de los porcentajes
 $suma = $porc1 + $porc2 + $porc3;
 
 // Mostrar la suma de los porcentajes
 var_dump("La suma de los porcentajes es " . $suma . "\n");
 echo("</br>");
 echo("</br>");
 
 // Evaluar la nota final
 if ($suma > 4.5) {
     var_dump("La nota es superior\n");
     echo("</br>");
     echo("</br>");

 } else if ($suma > 3.5) {
     var_dump("La nota es buena\n");
     echo("</br>");
     echo("</br>");

 } else if ($suma > 3) {
     var_dump("La nota es media\n");
     echo("</br>");
     echo("</br>");

 } else {
     var_dump("La nota es mala\n");
     echo("</br>");
     echo("</br>");
 }
 
 ?>
 