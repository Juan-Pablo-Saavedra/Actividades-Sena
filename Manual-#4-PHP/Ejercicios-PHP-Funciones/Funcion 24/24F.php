<?php
/**
 * Función para hacer las tablas de multiplicar que desee el usuario hasta donde el usuario indique
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
 */

function mult($pnum1, $pnum2){
    $num1 = $pnum1;
    $num2 = $pnum2;
    $con1=0;
    $par = 0;
    $imp = 0;
    $multi = "";
    $res="";
    while($con1 < $num1){
        $con2 = 0;
        $con1 = $con1+1;
        $res .= "<br>  TABLA DEL ".$con1."<br>";
        while($con2 < $num2){
            $con2 = $con2+1;
            $multi = $con1*$con2;
            $res .= $con1." x ".$con2." = ".$multi."<br> ";
            if($multi %2 == 0){
                $par = $par+1;
                $res = $res."Buzz <br>";
            }else{
                $imp = $imp+1;
                $res = $res."Bass <br>";
            }
        }
    }
    return $res."<br> Hay ".$par." pares"."<br> " . "Hay ".$imp." impares";
}

echo mult(15, 10);
?>
