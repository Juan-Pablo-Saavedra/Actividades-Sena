/*
Algoritmo: Bingo
Autor: Juan Pablo Saavedra
Fecha: 22/07/2024
*/

// Esta línea agrega un evento que se ejecuta cuando el DOM se ha cargado completamente.
document.addEventListener('DOMContentLoaded', function() {

    // Declara un array vacío llamado 'bingo' para almacenar los números del bingo.
    let bingo = [];

    // Inicializa una variable 'acumulador' en 0 para llevar la cuenta de los números.
    let acumulador = 0;

    // Inicializa una cadena vacía 'bingoPrint' para construir la representación HTML del bingo.
    let bingoPrint = '';

    // Un bucle for que se ejecuta 5 veces para crear las filas del bingo.
    for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
        // Declara un array vacío llamado 'interno' para almacenar los números de una fila.
        let interno = [];
        
        // Un bucle for que se ejecuta 5 veces para llenar cada fila con números.
        for (let iteracion2 = 0; iteracion2 < 5; iteracion2++) {
            // Incrementa el acumulador y asigna el valor al array 'interno'.
            acumulador = acumulador + 1;
            interno[iteracion2] = acumulador * 2;
        }
        
        // Asigna el array 'interno' a una posición del array 'bingo'.
        bingo[iteracion1] = interno;
    }

    // Construye la estructura HTML del bingo.
    bingoPrint += '<div class="card">';
    bingoPrint += '<div class="card-body">';

    // Declara un array con las letras del bingo.
    let letras = ['B', 'I', 'N', 'G', 'O'];

    // Un bucle for que se ejecuta 5 veces para construir las columnas del bingo.
    for (let iteracion3 = 0; iteracion3 < 5; iteracion3++) {
        // Añade la letra correspondiente al HTML.
        bingoPrint += '<div class="letra">';
        bingoPrint += '<div class="letra' + letras[iteracion3] + '">' + letras[iteracion3] + '</div>';
        
        // Un bucle for que se ejecuta 5 veces para añadir los números bajo cada letra.
        for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
            bingoPrint += '<div class="numero">' + bingo[iteracion1][iteracion3] + '</div>';
        }
        bingoPrint += '</div>';
    }

    bingoPrint += '</div></div>';

    // Inserta la estructura HTML del bingo en el elemento con id 'result-bingo'.
    document.getElementById('result-bingo').innerHTML = bingoPrint;

    // Declaramos una variable matrixPrint y construimos la estructura HTML.
    let matrixPrint = '';
    matrixPrint += '<div class="card">';
    matrixPrint += '<div class="card-body">';

    // Bucle para construir la matriz 'X' de bingo.
    for (let iteracion3 = 0; iteracion3 < 5; iteracion3++) {
        matrixPrint += '<div class="letra">';
        matrixPrint += '<div class="letra' + letras[iteracion3] + '">' + letras[iteracion3] + '</div>';
        
        // Bucle para añadir números y verificar si están en una 'X'.
        for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
            let numero = bingo[iteracion1][iteracion3];
            let isInX = false;
            if ((iteracion1 === iteracion3) || (iteracion1 + iteracion3 === 4)) {
                isInX = true;
            }
            matrixPrint += `<div class="numero${isInX ? ' x' : ''}">${numero}</div>`;
        }
        matrixPrint += '</div>';
    }

    matrixPrint += '</div></div>';

    // Inserta la estructura HTML de la matriz 'X' en el elemento con id 'bingoX'.
    document.getElementById('bingoX').innerHTML = matrixPrint;

    // Declaramos una variable matriXxPrint y construimos la estructura HTML.
    let matriXxPrint = '';
    matriXxPrint += '<div class="card">';
    matriXxPrint += '<div class="card-body">';

    // Bucle para construir la matriz 'Xx' de bingo.
    for (let iteracion3 = 0; iteracion3 < 5; iteracion3++) {
        matriXxPrint += '<div class="letra">';
        matriXxPrint += '<div class="letra' + letras[iteracion3] + '">' + letras[iteracion3] + '</div>';
        
        // Bucle para añadir números y verificar si están en la configuración 'Xx'.
        for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
            let numero = bingo[iteracion1][iteracion3];
            let isInX = false;

            // Condiciones para determinar si el número está en la configuración 'Xx'.
            if (
                (iteracion1 === 1 && iteracion3 === 0) || 
                (iteracion1 === 1 && iteracion3 === 1) || 
                (iteracion1 === 2 && iteracion3 === 2) || 
                (iteracion1 === 2 && iteracion3 === 0) || 
                (iteracion1 === 0 && iteracion3 === 2) ||
                (iteracion1 === 1 && iteracion3 === 3) || 
                (iteracion1 === 2 && iteracion3 === 4) || 
                (iteracion1 === 0 && iteracion3 === 4) ||
                (iteracion1 === 3 && iteracion3 === 1) || 
                (iteracion1 === 4 && iteracion3 === 2) || 
                (iteracion1 === 4 && iteracion3 === 0)
            ) {
                isInX = true;
            }

            matriXxPrint += `<div class="numero${isInX ? ' x' : ''}">${numero}</div>`;
        }
        matriXxPrint += '</div>';
    }

    matriXxPrint += '</div></div>';

    // Inserta la estructura HTML de la matriz 'Xx' en el elemento con id 'bingoXxx'.
    document.getElementById('bingoXxx').innerHTML = matriXxPrint;

});