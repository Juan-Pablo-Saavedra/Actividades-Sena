/**
 * Función para sacar el area de un cuadrado, rectangulo, y triangulo
 * Autor: Juan Pablo Saavedra Chambo
 * Fecha: Lunes 01 de abril de 2024
*/

function fig(pFiguras,pBase,pAltura){
    let figuras=pFiguras;
    let base=pBase;
    let altura=pAltura;
    let operacion;
    if(figuras=="cuadrado"){
        operacion=base*base;
        return operacion;
    }else if(figuras=="rectangulo"){
        operacion=base*altura;
        return operacion;
    }else if(figuras=="triangulo"){
        operacion=(base*altura)/2;
        return operacion;
    }else{
        return "figura no encontrada";
    }
}

const figExp=function(pFiguras,pBase,pAltura){
    let figuras=pFiguras;
    let base=pBase;
    let altura=pAltura;
    let operacion;
    if(figuras=="cuadrado"){
        operacion=base*base;
        return operacion;
    }else if(figuras=="rectangulo"){
        operacion=base*altura;
        return operacion;
    }else if(figuras=="triangulo"){
        operacion=(base*altura)/2;
        return operacion;
    }else{
        return "figura no encontrada";
    }
}