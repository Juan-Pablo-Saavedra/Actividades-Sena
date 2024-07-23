<?php
/**
* Ejercicio: Tabla Del 9 con for.
* Autor: Juan Pablo Saavedra Chambo.
* Fecha: 7/05/2024
*/

$num1;
$num2;
$num3;
$resul;


$num2 = 5;


for($num1 = 1; $num1 <= $num2; $num1++){
    $resul = $num1 * 9;
    if($resul %2 == 0){
        var_dump($resul . " Es Par.");
        echo "<br>";
        echo "<br>";

    }else{
        var_dump($resul . " Es Impar.");
        echo "<br>";
        echo "<br>";
    }
}

 
 
?>
