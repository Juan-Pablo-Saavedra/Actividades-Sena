/*
Algoritmo: Bingo
Autor: Juan Pablo Saavedra
Fecha: 22/07/2024
*/

document.addEventListener('DOMContentLoaded', function() {
    let bingo = [];
    let acumulador = 0;
    let bingoPrint = '';

    for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
        let interno = [];
        for (let iteracion2 = 0; iteracion2 < 5; iteracion2++) {
            acumulador = acumulador + 1;
            interno[iteracion2] = acumulador * 2;
        }
        bingo[iteracion1] = interno;
    }

    bingoPrint += '<div class="card">';
    bingoPrint += '<div class="card-body">';

    let letras = ['B', 'I', 'N', 'G', 'O'];
    for (let iteracion3 = 0; iteracion3 < 5; iteracion3++) {
        bingoPrint += '<div class="letra">';
        bingoPrint += '<div class="letra' + letras[iteracion3] + '">' + letras[iteracion3] + '</div>';
        for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
            bingoPrint += '<div class="numero">' + bingo[iteracion1][iteracion3] + '</div>';
        }
        bingoPrint += '</div>';
        
    }

    bingoPrint += '</div></div>';

    document.getElementById('result-bingo').innerHTML = bingoPrint;


    let matrixPrint='';

    matrixPrint += '<div class="card">';
    matrixPrint += '<div class="card-body">';
for (let iteracion3 = 0; iteracion3 < 5; iteracion3++) {
    matrixPrint += '<div class="letra">';
    matrixPrint += '<div class="letra' + letras[iteracion3] + '">' + letras[iteracion3] + '</div>';
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

document.getElementById('bingoX').innerHTML = matrixPrint;

let matriXxPrint='';
    matriXxPrint += '<div class="card">';
    matriXxPrint += '<div class="card-body">';
    for (let iteracion3 = 0; iteracion3 < 5; iteracion3++) {
       matriXxPrint += '<div class="letra">';
       matriXxPrint += '<div class="letra' + letras[iteracion3] + '">' + letras[iteracion3] + '</div>';
        for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
            let numero = bingo[iteracion1][iteracion3];
            let isInX = false;
            if (
                (iteracion1 === 0 && iteracion3 === 0) ||(iteracion1 === 1 && iteracion3 === 1) ||(iteracion1 === 2 && iteracion3 === 2) ||(iteracion1 === 2 && iteracion3 === 0) ||(iteracion1 === 0 && iteracion3 === 2)
            )
            {
                isInX = true;
            }
            else{
            }
 
            if (
                (iteracion1 === 1 && iteracion3 === 3) ||(iteracion1 === 2 && iteracion3 === 4) ||(iteracion1 === 0 && iteracion3 === 4) 
            ){
                isInX = true;
            }
            else{
            }
 
            if (
                (iteracion1 === 3 && iteracion3 === 1) ||(iteracion1 === 4 && iteracion3 === 2) ||(iteracion1 === 4 && iteracion3 === 0) 
            ){
                isInX = true;
            }
           else{
           }

           matriXxPrint += `<div class="numero${isInX ? ' x' : ''}">${numero}</div>`;
        }
       matriXxPrint += '</div>';
    }
   matriXxPrint += '</div></div>';
document.getElementById('bingoXxx').innerHTML = matriXxPrint;



});

