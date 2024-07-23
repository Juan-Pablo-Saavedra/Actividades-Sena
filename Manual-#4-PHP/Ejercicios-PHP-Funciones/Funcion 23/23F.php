<?php
/**
 * Función para hacer una tabla de multiplicar hasta 10 del número ingresado e imprimir los pares e impares
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function mult($num){
    $output = "";
    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        if ($result % 2 == 0) {
            $output .= "$result Es par. <br>";
        } else {
            $output .= "$result Es impar. <br>";
        }
    }
    return $output;
}


$numero = 11; 
echo "Tabla de multiplicar del $numero hasta el 10 y su paridad: <br>" . mult($numero);

?>
