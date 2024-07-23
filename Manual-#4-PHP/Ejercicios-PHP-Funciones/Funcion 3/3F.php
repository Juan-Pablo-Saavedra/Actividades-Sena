<?php

/**
 * Función para hcer la resta, multiplicación y división de dos números
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Domingo 12/05/2024
*/

// Definir funciones para cada operación

function suma($num1, $num2) {
  return $num1 - $num2;
}
function restar($num1, $num2) {
    return $num1 - $num2;
  }
  
  function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }
  
  function dividir($num1, $num2) {
    if ($num2 == 0) {
      echo "Error: No se puede dividir por cero.\n";
      return null;
    } else {
      return $num1 / $num2;
    }
  }
 
  $num1 = 7;
  $num2 = 5;
  
  $suma = suma($num1, $num2);
  $resta = restar($num1, $num2);
  $multiplicacion = multiplicar($num1, $num2);
  $division = dividir($num1, $num2);
  
 
  var_dump("La resta de $num1 y $num2 es: $resta\n");
  echo "<br>";
  echo "<br>";

  var_dump("La multiplicación de $num1 y $num2 es: $multiplicacion\n");
  echo "<br>";
  echo "<br>";
  
  if ($division !== null) {
    var_dump("La división de $num1 y $num2 es: $division\n");
    echo "<br>";
    echo "<br>";
  }

?>