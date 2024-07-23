<?php
/**
 * Función para calcular el sueldo de una persona
 * Autor: Juan Pablo Saavedra
 * Fecha: Domingo 12/05/2024
*/

function sue($pvalDia, $pdiaTra) {
    $valDia = $pvalDia;
    $diaTra = $pdiaTra;
    $suel = $valDia * $diaTra;
    return $suel;
  }
  
  function sal($psuel) {
    $suel = $psuel;
    $salu = $suel * 0.012;
    return $salu;
  }
  
  function pen($psuel) {
    $suel = $psuel;
    $pens = $suel * 0.016;
    return $pens;
  }
  
  function arl($psuel) {
    $suel = $psuel;
    $arL = $suel * 0.052;
    return $arL;
  }
  
  function des($salu, $ppen, $parl, $pret) {
    $salud = $salu;
    $pen = $ppen;
    $arl = $parl;
    $ret = $pret;
    $desc = $arl + $pen + $salud - $ret;
    return $desc;
  }
  
  function tot($psuel, $pdes, $psubTrans) {
    $suel = $psuel;
    $des = $pdes;
    $subTrans = $psubTrans;
    $to = $suel + $subTrans - $des; // Corrected subtraction
  
    if ($to < 0) {
      $to = 0;
    }
  
    return $to;
  }
  
  function subTra($psue){
    $sue = $psue;
    $subTran = 0;
    if($sue < (2 * 1300000)){
      $subTran = 114000;
    } else {
      $subTran = 0;
    }
    return $subTran;
  }
  
  function rete($psue){
    $sue = $psue;
    $ret = 0;
    if($sue > (4 * 1300000)){
      $ret = $sue * 0.04;
    } else {
      $ret = 0;
    }
    return $ret;
  }
  
  // Ejemplo de uso:
  $sueldo = sue(50000, 28);
  $salud = sal($sueldo);
  $pension = pen($sueldo);
  $arL = arl($sueldo);
  $descuentoTotal = des($salud, $pension, $arL, rete($sueldo));
  $subsidioTransporte = subTra($sueldo);
  $sueldoTotal = tot($sueldo, $descuentoTotal, $subsidioTransporte);
  
  var_dump("Sueldo: $sueldo");
  echo "<br>";
  echo "<br>";
  
  var_dump("Descuento por salud: $salud");
  echo "<br>";
  echo "<br>";
  
  var_dump("Descuento por pensión: $pension");
  echo "<br>";
  echo "<br>";
  
  var_dump("Descuento por ARL: $arL");
  echo "<br>";
  echo "<br>";
  
  var_dump("Descuento total: $descuentoTotal");
  echo "<br>";
  echo "<br>";
  
  var_dump("Subsidio de transporte: $subsidioTransporte");
  echo "<br>";
  echo "<br>";
  
  var_dump("Sueldo total: $sueldoTotal");
  
?>


