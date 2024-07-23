/**
 * Función para hcer la resta, multiplicación y división de dos números
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Lunes 01 de abril de 2024
*/

let num1
let num2

const restaExp=function(num1,num2){
    let restar;
    num1 = num1;
    num2 = num2;
    restar = num1 - num2;
    return restar;
}

const multiplicacionExp=function(num1,num2){
    let multiplicar;
    num1 = num1;
    num2 = num2;
    multiplicar = num1 * num2;
    return multiplicar;
}

const divisionExp=function(num1,num2){
    let dividir;
    num1 = num1;
    num2 = num2;
    dividir = num1 / num2;
    return dividir;
}

const opeExp = function(poperador,num1,num2){
    let operador = poperador;
    num1 = num1;
    num2 = num2;
     if (operador == "resta") {
        opeResultado = restaExp(num1,num2);
     }else if (operador == "multiplicacion") {
        opeResultado = multiplicacionExp(num1,num2);
     }else if (operador == "division") {
        opeResultado = divisionExp(num1,num2);
     }else{
        opeResultado = "Error!!! no se puede operar";
     }
     return opeResultado;
}


function resta(num1,num2){
    let restar;
    num1 = num1;
    num2 = num2;
    restar=num1-num2;
    return restar;
}

function multiplicacion(num1,num2){
    let multiplicar;
    num1 = num1;
    num2 = num2;
    multiplicar=num1*num2;
    return multiplicar;
}

function division(num1,num2){
    let dividir;
    num1 = num1;
    num2 = num2;
    dividir=num1/num2;
    return dividir;
}

function ope(poperador,num1,num2){
    let operador=poperador;
    num1 = num1;
    num2 = num2;
    if(operador=="resta"){
        resultado=resta(num1,num2);
    }else if(operador=="multiplicacion"){
        resultado=multiplicacion(num1,num2);
    }else if(operador=="division"){
        resultado=division(num1,num2);
    }else{
        resultado="Error";
    }
    return resultado;
}