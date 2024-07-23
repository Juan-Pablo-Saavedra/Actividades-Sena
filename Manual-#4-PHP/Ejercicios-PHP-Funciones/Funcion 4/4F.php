<?php

/**
 * Función para sacar el porcentaje de un número
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Domingo 12/05/2024
*/

function calcularPorcentajeConParametros($numero, $porcentaje) {

     // Validar que el porcentaje sea un valor numérico entre 0 y 100
    if (!is_numeric($porcentaje) || $porcentaje < 0 || $porcentaje > 100) {
      echo "Error: El porcentaje debe ser un número entre 0 y 100.";
      return;
    }
  
    $porcentajeDecimal = $porcentaje / 100;
    $resultado = $numero * $porcentajeDecimal;
    return $resultado;
  }

  $numero = 100;
  $porcentaje = 20;
  
  $resultado = calcularPorcentajeConParametros($numero, $porcentaje);
  
  var_dump("El $porcentaje% de $numero es: $resultado");
  echo "<br>";
  echo "<br>";

  function calcularPorcentajeSinParametros() {
    $numero = 250;
    $porcentaje = 30;
  
 // Validar que el porcentaje sea un valor numérico entre 0 y 100
    if (!is_numeric($porcentaje) || $porcentaje < 0 || $porcentaje > 100) {
      var_dump("Error: El porcentaje debe ser un número entre 0 y 100.");
      return;
    }
  
    $porcentajeDecimal = $porcentaje / 100;
    $resultado = $numero * $porcentajeDecimal;
    var_dump("El $porcentaje% de $numero es: $resultado");
    echo "<br>";
    echo "<br>";
  }
  calcularPorcentajeSinParametros();

  
  
    
?>