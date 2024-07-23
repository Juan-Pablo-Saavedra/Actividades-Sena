<?php
/**
* Ejercicio: Tabla Del 5 con while.
* Autor: Juan Pablo Saavedra Chambo.
* Fecha: 7/05/2024
*/

$num1;
$num2;
$num3;
$resul;


$num1 = 0;
$num2 = 5;


while ($num1 <= $num2) {
  
    $num1 = $num1 + 1;
    $resul = $num1 * 5;

    var_dump("5 x " . $num1 . " = " . $resul . "\n");
    echo "<br>";
    echo "<br>";
}


 
 
?>
