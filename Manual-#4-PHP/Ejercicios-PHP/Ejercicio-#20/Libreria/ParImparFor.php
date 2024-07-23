<?php
/**
* Ejercicio: Par O Impar Con For.
* Autor: Juan Pablo Saavedra Chambo.
* Fecha: 7/05/2024
*/

$numero = 5;
$contar = 0;

for($contar = 1; $contar <= $numero; $contar++){
    if($contar % 2 == 0){
        var_dump($contar . " Es Par");
        echo("<br>");
        echo("<br>");
    }else{
        var_dump($contar . " Es Impar");
        echo("<br>");
        echo("<br>");
    }
}
?>
