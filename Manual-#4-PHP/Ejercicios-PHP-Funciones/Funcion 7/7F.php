<?php

/**
 * Función para sacar el area de un cuadrado, rectangulo, y triangulo
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Domingo 12/05/2024
*/

function calcularAreaCuadrado($lado) {
    $area = $lado * $lado;
    return $area;
  }
  
  function calcularAreaRectangulo($base, $altura) {
    $area = $base * $altura;
    return $area;
  }
  
  function calcularAreaTriangulo($base, $altura) {
    $area = ($base * $altura) / 2;
    return $area;
  }

  
  //Funcion con parametros:

  function calcularAreaCuadradoDefault($lado = 5) {
    $area = $lado * $lado;
    return $area;
  }
  
  function calcularAreaRectanguloDefault($base = 10, $altura = 6) {
    $area = $base * $altura;
    return $area;
  }
  
  function calcularAreaTrianguloDefault($base = 12, $altura = 8) {
    $area = ($base * $altura) / 2;
    return $area;
  }

  
$ladoCuadrado = 4;
$areaCuadrado = calcularAreaCuadrado($ladoCuadrado);
var_dump("El area del cuadrado es: ". $areaCuadrado);
echo "<br>";
echo "<br>";

$baseRectangulo = 7;
$alturaRectangulo = 5;
$areaRectangulo = calcularAreaRectangulo($baseRectangulo, $alturaRectangulo);
var_dump("El area del rectangulo es: ". $areaRectangulo); 
echo "<br>";
echo "<br>";

$baseTriangulo = 9;
$alturaTriangulo = 11;
$areaTriangulo = calcularAreaTriangulo($baseTriangulo, $alturaTriangulo);
var_dump("El area del triangulo es: ". $areaTriangulo); 
echo "<br>";
echo "<br>";

//Impresion de funciones con parametros:

echo "A continuacion las areas realizadas por una funcion que contiene parametros";
echo "<br>";
echo "<br>";

$areaCuadradoDefault = calcularAreaCuadradoDefault();
var_dump("El area del cuadrado es: ". $areaCuadradoDefault);
echo "<br>";
echo "<br>"; 


$areaRectanguloDefault = calcularAreaRectanguloDefault();
var_dump("El area del rectangulo es: ". $areaRectanguloDefault); 
echo "<br>";
echo "<br>";


$areaTrianguloDefault = calcularAreaTrianguloDefault();
var_dump("El area del triangulo es: ". $areaTrianguloDefault); 
echo "<br>";
echo "<br>";


?>