<?php
/**
 * Ejercicio: Almacen de una tienda.
 * Autor: Juan Pablo Saavedra Chambo.
 * Fecha: 12/05/2024
 */

$empleados = []; 
$listaNomina = []; 
$salarioMinimo = 16000000;
$cantidadRegistros;
$mostrar;
$mostrarRetencion;

$calcularSalario = function ($valorDia, $diasTrabajados) {
    return $valorDia * $diasTrabajados;
};

$calcularSubsidioTransporte = function ($salario) use ($salarioMinimo) {
    if ($salario < $salarioMinimo * 2) {
        return "Si se aplica el subsidio de transporte " . $salario;
    } else {
        return "No se aplica el subsidio de transporte ";
    }
};

$calcularSalud = function ($salario) {
    return $salario * 0.12;
};

$calcularPension = function ($salario) {
    return $salario * 0.16;
};

$calcularARL = function ($salario) {
    return $salario * 0.052;
};

$calcularDeducible = function ($salario) use ($calcularSalud, $calcularPension, $calcularARL) {
    return $calcularSalud($salario) + $calcularPension($salario) + $calcularARL($salario);
};

$calcularRetencion = function ($salario) use ($salarioMinimo) {
    if ($salario > $salarioMinimo * 12) {
        return "Retencion de 0.08 " . $salario * 0.08;
    } else if ($salario > $salarioMinimo * 8) {
        return "Retencion de 0.04 " . $salario * 0.04;
    } else if ($salario > $salarioMinimo * 6) {
        return "Retencion de 0.02 " . $salario * 0.02;
    } else {
        return "No aplica retención";
    }
};

$calcularTotal = function ($salario) use ($calcularDeducible) {
    return $salario - $calcularDeducible($salario);
};

$empleados = [
  ['id' => 2079175835, 'nombre' => "Ana", 'apellido' => 'Gómez', 'cargo' => 'Analista de Marketing', 'valorDia' => 85000, 'diasTrabajado' => 22],
  ['id' => 2897563421, 'nombre' => "Pedro", 'apellido' => "López", 'cargo' => 'Diseñador Gráfico', 'valorDia' => 80000, 'diasTrabajado' => 30],
  ['id' => 2335098765, 'nombre' => 'María', 'apellido' => 'Martínez', 'cargo' => 'Contador', 'valorDia' => 60000, 'diasTrabajado' => 25],
  ['id' => 2240975434, 'nombre' => "Luis", 'apellido' => 'Pérez', 'cargo' => "Desarrollador Web", 'valorDia' => 70000, 'diasTrabajado' => 20],
  ['id' => 2234567865, 'nombre' => "Laura", 'apellido' => 'García', 'cargo' => 'Médico', 'valorDia' => 120000, 'diasTrabajado' => 15],
  ['id' => 2234567886, 'nombre' => 'Juan', 'apellido' => 'Rodríguez', 'cargo' => 'Bombero', 'valorDia' => 55000, 'diasTrabajado' => 40],
  ['id' => 2232456787, 'nombre' => "Elena", 'apellido' => 'Sánchez', 'cargo' => 'Arquitecto', 'valorDia' => 90000, 'diasTrabajado' => 28],
  ['id' => 2233235648, 'nombre' => "Carlos", 'apellido' => 'Fernández', 'cargo' => 'Ingeniero Civil', 'valorDia' => 75000, 'diasTrabajado' => 18],
  ['id' => 2542356759, 'nombre' => 'Patricia', 'apellido' => 'Gutiérrez', 'cargo' => 'Profesor de Matemáticas', 'valorDia' => 110000, 'diasTrabajado' => 24],
  ['id' => 2234865320, 'nombre' => "Javier", 'apellido' => "Martín", 'cargo' => "Analista de Sistemas", 'valorDia' => 100000, 'diasTrabajado' => 35]
];

$cantidadRegistros = count($empleados);

for ($iteracion = 0; $iteracion < $cantidadRegistros; $iteracion++) {
    $trabajador = $empleados[$iteracion];
    $salarioCalculado = $calcularSalario($trabajador['valorDia'], $trabajador['diasTrabajado']);
    $subTransCalculada = $calcularSubsidioTransporte($salarioCalculado);
    $retencionCalculada = $calcularRetencion($salarioCalculado);
    $saludCalculada = $calcularSalud($salarioCalculado);
    $pensionCalculada = $calcularPension($salarioCalculado);
    $arlCalculada = $calcularARL($salarioCalculado);
    $deducibleCalculada = $calcularDeducible($salarioCalculado);
    $totalCalculado = $calcularTotal($salarioCalculado);
    $listaNomina[] = [
        'id' => $trabajador['id'],
        'nombre' => $trabajador['nombre'],
        'apellido' => $trabajador['apellido'],
        'cargo' => $trabajador['cargo'],
        'salario' => $salarioCalculado,
        'subtransporte' => $subTransCalculada,
        'retencion' => $retencionCalculada,
        'salud' => $saludCalculada,
        'pension' => $pensionCalculada,
        'arl' => $arlCalculada,
        'deducible' => $deducibleCalculada,
        'total' => $totalCalculado
    ];
}

var_dump($listaNomina);
?>
