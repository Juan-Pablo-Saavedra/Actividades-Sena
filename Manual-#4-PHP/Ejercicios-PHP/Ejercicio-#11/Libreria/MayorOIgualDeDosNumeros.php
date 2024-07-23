<?php 
/**
 * Ejercicio: Imprimir Si De Dos Numeros, Cual Es EL Mayor O Si Son Iguales
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$num1 = 25;
$num2 = 15;

var_dump("El Primer Numero Es: ".$num1);

echo("</br>");
echo("</br>");

var_dump("El Segundo Numero es: ".$num2);
echo("</br>");
echo("</br>");

if( $num1 == $num2){
    var_dump("Los Numeros Son Iguales");
}else{
    if( $num1 >$num2){
        var_dump("El numero ".$num1." es mayor");
    }else{
        var_dump("El numero ".$num2."es menor");
    }
}

?>