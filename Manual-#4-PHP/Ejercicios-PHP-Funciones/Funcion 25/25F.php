<?php
/**
 * Función para hacer las tablas de multiplicar que desee el usuario hasta donde el usuario indique
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
 */

function mult($pnum1, $pnum2){
    $num1 = $pnum1;
    $num2 = $pnum2;
    $par = 0;
    $imp = 0;
    $multi = "";
    $res="";
    for ($con1 = 1; $con1 <= $num1; $con1++){
        $res .= "<br><br>  TABLA DEL ".$con1."<br>";
        for ($con2 = 1; $con2 <= $num2; $con2++){
            $multi = $con1 * $con2;
            $res .= $con1 . " x " . $con2 . " = " . $multi . "<br>";
            if ($multi % 2 == 0){
                $par = $par + 1;
                $res .= "Buzz <br>";
            } else {
                $imp = $imp + 1;
                $res .= "Bass <br>";
            }
        }
    }
    return $res . "<br> Hay " . $par . " pares" . "<br>" . "Hay " . $imp . " impares";
}

var_dump(mult(7, 3));
echo "<br>";
echo "<br>";

?>
