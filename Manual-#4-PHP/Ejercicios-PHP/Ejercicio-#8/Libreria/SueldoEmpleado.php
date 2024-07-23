<?php 
/**
 * Ejercicio: Calcular El Sueldo De Un Empleado.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$diasTrabajados = 13;
$valorDia = 50000;
$salario;
$salud;
$pension; 
$arl;
$descuento;
$pagoTotal;

$salario = $diasTrabajados * $valorDia;
$salud = $salario * 0.12;
$pension = $salario * 0.16;
$arl = $salario * 0.052;
$descuento = $salud + $pension + $arl;
$pagoTotal = $salario - $descuento;

var_dump("La Salud Tiene Un Valor De: ",+$salud);
echo("</br>");
echo("</br>");

var_dump("La Pension Tiene Un Valor De: ",+$pension);
echo("</br>");
echo("</br>");

var_dump("El Arl Tiene Un Valor De: ",+$arl);
echo("</br>");
echo("</br>");

var_dump("El Sueldo Total Del Empleado Es: ",+$pagoTotal);
echo("</br>");
echo("</br>");


?>