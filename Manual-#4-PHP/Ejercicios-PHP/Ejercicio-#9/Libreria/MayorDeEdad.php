<?php 
/**
 * Ejercicio: Imprimir Si Es Mayor De 18 Años.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$edad = 16;

var_dump("Su Edad Es: ".$edad);
echo("</br>");
echo("</br>");

if($edad>17){
    $result = "Usted Es Mayor De Edad";
}else{
    $result = "Usted Es Menor De Edad";
}

?>