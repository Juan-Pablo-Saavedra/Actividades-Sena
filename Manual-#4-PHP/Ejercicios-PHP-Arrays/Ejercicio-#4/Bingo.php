<?php
/**
 * Ejercicio: Tablero De Bingo.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */

$tabla = [];
$tablaX1 = [];
$tablaX2 = [];
$tablaX3 = [];
$grupoB = [];
$grupoI = [];
$grupoN = [];
$grupoG = [];
$grupoO = [];
$numero = 1;

for ($fila = 0; $fila < 5; $fila++) {
    $tabla[$fila] = [];
    for ($columna = 0; $columna < 5; $columna++) {
        $tabla[$fila][$columna] = $numero * 2;

        if ($columna === 0) $grupoB[] = $tabla[$fila][$columna];
        else if ($columna === 1) $grupoI[] = $tabla[$fila][$columna];
        else if ($columna === 2) $grupoN[] = $tabla[$fila][$columna];
        else if ($columna === 3) $grupoG[] = $tabla[$fila][$columna];
        else if ($columna === 4) $grupoO[] = $tabla[$fila][$columna];
        $numero++;
    }
}

for ($fila = 0; $fila < 3; $fila++) {
    for ($columna = 0; $columna < 3; $columna++) {
        if ($fila == $columna || $fila + $columna == 2) {
            $tablaX1[] = $tabla[$fila][$columna];
        }
    }
}

for ($fila = 0; $fila < 5; $fila++) {
    for ($columna = 0; $columna < 3; $columna++) {
        if ($fila + $columna == ($columna + 1) * 2 || $fila + $columna == 4) {
            $tablaX2[] = $tabla[$fila][$columna];
        }
    }
}

for ($fila = 0; $fila < 3; $fila++) {
    for ($columna = 2; $columna < 5; $columna++) {
        if ($fila + $columna == ($columna + 1) * 2 || $fila + $columna == 4) {
            $tablaX3[] = $tabla[$fila][$columna];
        }
    }
}

var_dump("Tabla: <br><br>");
foreach ($tabla as $fila) {
    var_dump(implode(", ", $fila) . "<br><br>");
}

var_dump("B: " . implode(", ", $grupoB) . "<br><br>");
var_dump("I: " . implode(", ", $grupoI) . "<br><br>");
var_dump("N: " . implode(", ", $grupoN) . "<br><br>");
var_dump("G: " . implode(", ", $grupoG) . "<br><br>");
var_dump("O: " . implode(", ", $grupoO) . "<br><br>");
var_dump("X1: " . implode(", ", $tablaX1) . "<br><br>");
var_dump("X2: " . implode(", ", $tablaX2) . "<br><br>");
var_dump("X3: " . implode(", ", $tablaX3) . "<br><br>");
?>
