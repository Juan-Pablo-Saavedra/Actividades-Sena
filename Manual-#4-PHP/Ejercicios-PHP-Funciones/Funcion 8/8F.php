<?php
/**
 * Función para obtener el sueldo ganado por un trabajador
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function calcularSueldoNeto($valordia, $DiasTrabajados) {
  $SALUD = 0.12;
  $PENSION = 0.16;
  $ARL = 0.052;

  $total = $valordia * $DiasTrabajados;

  // Calcular deducciones
  $Salud = $total * $SALUD;
  $Pension = $total * $PENSION;
  $DARL = $total * $ARL;


  $totalDeducciones = $Salud + $Pension + $DARL;

  $sueldoTotal = $total - $totalDeducciones;

  var_dump("Sueldo: $". $total);
  echo "<br>";
  echo "<br>";

  var_dump("Salud: $". $Salud);
  echo "<br>";
  echo "<br>";

  var_dump("Pensión: $". $Pension);
  echo "<br>";
  echo "<br>";

  var_dump("ARL: $". $DARL);
  echo "<br>";
  echo "<br>";

  var_dump("Total deducciones: $" .$totalDeducciones);
  echo "<br>";
  echo "<br>";

  var_dump("Sueldo Total: $". $sueldoTotal);
  echo "<br>";
  echo "<br>";

}

$valordia = 55000; 
$DiasTrabajados = 28; 

calcularSueldoNeto($valordia, $DiasTrabajados);

?>