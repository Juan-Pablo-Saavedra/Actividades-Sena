// Funcion De Operaciones Aritmeticas
// Autor: Juan Pablo Saavedra
// Lunes 01 De Abril Del 2024

let pnumeroUno
let pnumeroDos

const suma=function(pnumeroUno,pnumeroDos){
    let sumar;
    pnumeroUno = pnumeroUno;
    performancenumeroDos = pnumeroDos;

    sumar = pnumeroUno + pnumeroDos;
    return sumar;
}
const resta=function(pnumeroUno,pnumeroDos){
    let restar;
    pnumeroUno = pnumeroUno;
    pnumeroDos = pnumeroDos;

    restar = pnumeroUno - pnumeroDos;
    return restar;
}
const multiplicacion=function(pnumeroUno,pnumeroDos){
    let multiplicar;
    pnumeroUno = pnumeroUno;
    pnumeroDos = pnumeroDos;

    multiplicar = pnumeroUno * pnumeroDos;
    return multiplicar;
}
const division=function(pnumeroUno,pnumeroDos){
    let dividor;
    pnumeroUno = pnumeroUno;
    pnumeroDos = pnumeroDos;

    dividor = pnumeroUno / pnumeroDos;
    return dividor;
}
const operacion = function(poperador,pnumeroUno,pnumeroDos){
    let operador = poperador;
    pnumeroUno = pnumeroUno;
    pnumeroDos = pnumeroDos;
     if (operador == "suma") {
        operacionResultado = suma(pnumeroUno,pnumeroDos);
     }else if (operador == "resta") {
        operacionResultado = resta(pnumeroUno,pnumeroDos);
     }else if (operador == "multiplicacion") {
        operacionResultado = multiplicacion(pnumeroUno,pnumeroDos);
     }else if (operador == "division") {
        operacionResultado = division(pnumeroUno,pnumeroDos);
     }else{
        operacionResultado = "Error!!! no se puede operar";
     }
     return operacionResultado;
}