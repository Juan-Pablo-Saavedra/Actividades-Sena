function edades(paedad,pamostrar){
    let edad = paedad;
    let mostrar=pamostrar
    let nacio = 2003;
    let actu = 2024;
    let resul;

    resul = actu - nacio;


    if(resul>18){
        mostrar=console.log("Mayor De Edad")
    }else{
        mostrar=console.log("Menor De Edad")
    }

    return(mostrar);
}
const edadd=function(pedade,pamostrar){
    let edade = pedade;
    let mostrar = pamostrar
    let nacer = 2003;
    let actual = 2024;
    let result;

    result = actual - nacer;



    if(result>17){
        mostrar = console.log("Es Mayor De Edad")
    }else{
        mostrar = console.log("Es Menor De Edad")
    }
    return(mostrar);

}

