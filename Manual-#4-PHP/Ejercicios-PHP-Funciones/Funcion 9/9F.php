<?php

/**
 * Función para imprimir que número es mayor
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function mayEdad($edad) {
    if ($edad > 17) {
      return var_dump("Edad: ". $edad . " Usted es mayor de edad.");


    } else {
      return var_dump("Edad: ". $edad . " Usted es menor de edad.");
    }
  }
  
  function mayEdadExp($edad) {
    $resultado = ($edad > 17) ? " Usted es mayor de edad." : " Usted es menor de edad.";
    return var_dump("Edad: ". $edad . $resultado);
  }

  $edadPersona = 20;

echo mayEdad($edadPersona);
echo "<br>";
echo "<br>"; 

$edadPersona = 15;

echo mayEdadExp($edadPersona); 
echo "<br>";
echo "<br>";

  
?>
