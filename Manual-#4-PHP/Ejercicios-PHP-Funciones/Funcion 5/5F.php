<?php

/**
 * Función para sacar el promedio de 3 números
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Domingo 12/05/2024
*/

function calcularPromedio() {
    // Se solicitan los 3 números al usuario
    $numero1 = 5;
    $numero2 = 13;
    $numero3 = 56;
  
    $promedio = ($numero1 + $numero2 + $numero3) / 3;
 
    var_dump("El promedio de los números 5, 13, 56 es: " . $promedio);
    echo "<br>";
    echo "<br>";

  }

  calcularPromedio();


  function calcularPromedioConParametros($numero1, $numero2, $numero3) {
    // Se calcula el promedio
    $promedio = ($numero1 + $numero2 + $numero3) / 3;
  
    // Se retorna el promedio
    return $promedio;
  }
  
  // Se llaman a la función con los valores deseados y se muestra el resultado
  $promedioCalculado = calcularPromedioConParametros(5, 8, 10);
  var_dump("El promedio de los números 5, 8 y 10 es: " . $promedioCalculado);

  $promedio = calcularPromedioConParametros(5, 8, 10);



    
?>