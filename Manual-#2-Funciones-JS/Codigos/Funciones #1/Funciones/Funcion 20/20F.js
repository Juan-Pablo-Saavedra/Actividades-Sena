/**
 * Función para contar hasta el número ingresado
 * Autor: Juan Pablo Saavedra
 * Fecha: Lunes 01 de abril de 2024
*/

function cont(pnum){
    let num = pnum;
    let res = "";
    for(let con = 1; con <= num; con++){
        res += con+"\n";
    }
    return res;
}