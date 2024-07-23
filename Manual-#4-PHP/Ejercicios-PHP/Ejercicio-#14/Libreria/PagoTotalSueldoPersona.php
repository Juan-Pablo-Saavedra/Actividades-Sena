 <?php
/**
 * Ejercicio: Pago Total Del sueldo de una persona.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */


 $salario = 1500000;
 $dias = 43;
 $valorDia;
 $salud;
 $pension;
 $arl;
 $transporte;
 $salarioMin = 868800; 
 $deducible;
 

 $valorDia = $salario / $dias;
 

 $salario = $dias * $valorDia;
 

var_dump("El salario de la persona es $" . $salario . PHP_EOL);
echo("</br>");
echo("</br>");
 

 if ($salarioMin * 2 < $salario) {
     $salario += 1;
 }
 

 $salud = $salario * 0.12;
 $pension = $salario * 0.16;
 $arl = $salario * 0.052;
 
 // Impresión de los aportes
var_dump("El subsidio de salud de la persona es $" . $salud . PHP_EOL);
echo("</br>");
echo("</br>");

var_dump("El subsidio de la pensión de la persona es $" . $pension . PHP_EOL); 
echo("</br>");
echo("</br>");

var_dump("El subsidio de ARL de la persona es $" . $arl . PHP_EOL);
echo("</br>");
echo("</br>"); 
 

 if ($salario >= $salarioMin * 4) {
     $descuentoParafiscales = $salario * 0.04;
 } else {
     $descuentoParafiscales = 0;
 }
 

 $deducible = $salud + $pension + $arl;
 

 $salarioNeto = $salario - $deducible;
 
 
 var_dump("El salario total de la persona es $" . $salarioNeto . PHP_EOL);
 
 ?>
