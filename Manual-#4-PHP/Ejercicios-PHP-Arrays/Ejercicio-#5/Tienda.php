<?php
/**
 * Ejercicio: Almacen de una tienda.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */

$almacen = [];
$nuevoProducto;
$listaBusqueda = [];

$almacen = [
    ['producto' => 'Arroz', 'tipoProducto' => 'granos', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 2450],
    ['producto' => 'Trucha', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 9000],
    ['producto' => 'Papa', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1000],
    ['producto' => 'Mora', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1500],
    ['producto' => 'Pollo Entero', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 4500],
    ['producto' => 'Carne entera', 'tipoProducto' => 'carne', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 2450]
];

$nuevoProducto = ['producto' => 'Res', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 7500];
$almacen[] = $nuevoProducto;

foreach ($almacen as $producto) {
    var_dump($producto);
    if ($producto['tipoProducto'] === 'fruver') {
        $listaBusqueda[] = $producto;
    }
}

var_dump($listaBusqueda);
?>
