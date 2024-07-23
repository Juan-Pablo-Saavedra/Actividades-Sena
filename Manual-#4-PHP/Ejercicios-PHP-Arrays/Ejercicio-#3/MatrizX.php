<?php
/**
 * Ejercicio: Matriz en X.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */

// Matriz
$matrizAleatoria = [];

for ($filaAleatoria = 0; $filaAleatoria < 5; $filaAleatoria++) {
    $matrizAleatoria[$filaAleatoria] = [];
    for ($columnaAleatoria = 0; $columnaAleatoria < 5; $columnaAleatoria++) {
        $numeroAleatorio = rand(1, 100);
        $matrizAleatoria[$filaAleatoria][$columnaAleatoria] = $numeroAleatorio;
    }
}

var_dump("Matriz generada: <br><br>");

foreach ($matrizAleatoria as $fila) {
    var_dump(implode("\t", $fila) . "<br><br>");
}

// Matriz en forma de X
$matrizX = "";

for ($filaX = 0; $filaX < 5; $filaX++) {
    for ($columnaX = 0; $columnaX < 5; $columnaX++) {
        if ($filaX === $columnaX || $filaX + $columnaX === 4) {
            $matrizX .= $matrizAleatoria[$filaX][$columnaX] . "\t"; 
        } else {
            $matrizX .= " \t"; 
        }
    }
    $matrizX .= ""; 
}

var_dump("Matriz en forma de X: <br><br>");

var_dump($matrizX);
?>
