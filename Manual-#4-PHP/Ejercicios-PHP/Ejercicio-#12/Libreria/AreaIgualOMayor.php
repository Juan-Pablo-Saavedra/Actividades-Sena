<?php 

/**
 * Ejercicio: Calcular EL Area De Dos Cuadrados Y Imprimir Si Las Dos Areas Son Iguales O Cual Es La Mayor.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 7/05/2024
 */

$area1;
$area2;
$area3;

$lado = 15;
$lado2 = 13;
$lado3 = 10;

$area1 = $lado * $lado;
$area2 = $lado2 *  $lado2;
$area3 = $lado3 * $lado3;

if($area1 == $area2 && $area2 == $area3 && $area3 == $area1){
    var_dump($area1);
    var_dump($area2);
    var_dump($area3);
}else{

    if($area1 > $area2 && $area2 > $area3){

        var_dump($area1 . " Es El Area Mas Grande");

    }else{
        if($area1 < $area2 && $area2 < $area3){

            var_dump($area2 . " Es El Area Mas Grande ");

        }else{

            var_dump($area3 . " Es El Area Mas Grande");

        }
    }
}
?>

 