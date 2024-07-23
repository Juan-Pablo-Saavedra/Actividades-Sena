<?php

/**
 * Función para sacar el promedio de 3 notas
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Domingo 12/05/2024
*/

function calcularPromedio() {
    $nota1 = 4.5;
    $nota2 = 2.5;
    $nota3 = 3.8;
  
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
  
    var_dump("El Promedio de las 3 notas es: " .$promedio);
    echo "<br>";
    echo "<br>";

  }

  calcularPromedio();
  

  function calcularPromedioConParametros($nota1, $nota2, $nota3) {
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    var_dump($promedio);
    
  }
  

$nota1 = 3.2;
$nota2 = 3.5;
$nota3 = 2.2;

echo "El resultado del promedio de las 3 notas es: "; calcularPromedioConParametros($nota1, $nota2, $nota3);

  
?>
  