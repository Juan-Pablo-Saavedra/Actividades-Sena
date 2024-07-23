<?php

/**
 * Función para saber si la perosna es mayor de edad o no
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/
function edadFPHP() {
    $nacimiento = 2005;
    $añoActual = 2024;
    $edad = $añoActual - $nacimiento; 
  
    if ($edad > 17) {
      return "Edad: " . $edad . " Usted es mayor de edad";
    } else {
      return "Edad: " . $edad . " Usted es menor de edad";
    }
}
  
function edadFExp($pNacimiento) {
    $nac = $pNacimiento;
    $añoact = 2024;
    $edad = $añoact - $nac;
    if ($edad > 17) {
        return "Edad: " . $edad . " Usted es mayor de edad";
    } else {
        return "Edad: " . $edad . " Usted es menor de edad";
    }
}


var_dump (edadFPHP());
echo "<br>";
echo "<br>";


$fechaNacimiento1 = 1985;

var_dump(edadFExp($fechaNacimiento1)); 
echo "<br>";
echo "<br>";


?>