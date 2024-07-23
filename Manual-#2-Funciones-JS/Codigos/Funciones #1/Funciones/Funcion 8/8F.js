/**
 * Función para obtener el sueldo ganado por un trabajador
 * Autor: Juan Pablo Saavedra
 * Fecha: Lunes 01 de abril de 2024
*/
function subsidios(psubsidio, pdias, pvdia) {
    let subsidio = psubsidio;
    let salario = pdias * pvdia;
    let porcentaje;

    switch (subsidio) {
        case "salud":
            porcentaje = 0.12;
            break;
        case "pension":
            porcentaje = 0.16;
            break;
        case "arl":
            porcentaje = 0.052;
            break;
        default:
            return "No hay más subsidios";
    }

    return salario * porcentaje;
}

function pagoTotal(pdias, pvdia) {
    let salario = pdias * pvdia;
    let deducible = subsidios("salud", pdias, pvdia) + subsidios("pension", pdias, pvdia) + subsidios("arl", pdias, pvdia);
    return salario - deducible;
}

function des(salud, pension, arl) {
    return salud + pension + arl;
}