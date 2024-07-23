<?php
/**
 * Función para calcular 3 edades, su promedio y si es mayor de edad o no
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function eda($pfecNa){
    $fecNa = $pfecNa;
    $fecAc = 2024;
    $edad = $fecAc - $fecNa;
    return $edad;
}

function pro($peda1, $peda2, $peda3){
    $eda1 = $peda1;
    $eda2 = $peda2;
    $eda3 = $peda3;
    $prom = ($eda1 + $eda2 + $eda3) / 3;
    return $prom;
}

function may($ped){
    $ed = $ped;
    if (intval($ed) > 17) {
        return "es mayor de edad.";
    } else {
        return "es menor de edad.";
    }
}


$edad1 = eda(2009);
$edad2 = eda(2000);
$edad3 = eda(1995);

$promedio = pro($edad1, $edad2, $edad3);
var_dump("El promedio de las edades es: " . $promedio);
echo "<br>";
echo "<br>";

var_dump("La primera persona " . may($edad1));
echo "<br>";
echo "<br>";

var_dump("La segunda persona " . may($edad2));
echo "<br>";
echo "<br>";

var_dump("La tercera persona " . may($edad3));

?>
