/**
 * Función para saber si la perosna es mayor de edad o no
 * Autor: Juan Pablo Saavedra
 * Fecha: Lunes 01 de abril de 2024
*/
function edadF(pNacimiento){
    let nac=pNacimiento;
    let añoact=2024;
    let edad;
    edad=añoact-nac;
    if(edad>17){
        return "Edad: "+"("+edad+") "+"\nusted es mayor de edad";
    }else{
        return "Edad: "+"("+edad+") "+"\nusted es menor de edad";
    }
}


const edadFExp=function(pNacimiento){
    let nac=pNacimiento;
    let añoact=2024;
    let edad;
    edad =añoact-nac;
    if(edad>17){
        return "Edad: "+"("+edad+") "+"\nusted es mayor de edad";
    }else{
        return "Edad: "+"("+edad+") "+"\nusted es menor de edad";
    }
}