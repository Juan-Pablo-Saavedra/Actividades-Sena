function calcularEdades() {
    let anoNac1 = parseFloat(document.getElementById('anoNac1ID').value);
    let anoNac2 = parseFloat(document.getElementById('anoNac2ID').value);
    let anoNac3 = parseFloat(document.getElementById('anoNac3ID').value);
    let anoActual = parseFloat(document.getElementById('anoActualID').value);

    if (isNaN(anoNac1) || isNaN(anoNac2) || isNaN(anoNac3) || isNaN(anoActual) ||
        anoNac1 <= 0 || anoNac2 <= 0 || anoNac3 <= 0 || anoActual <= 0 || 
        anoActual < anoNac1 || anoActual < anoNac2 || anoActual < anoNac3) {
        document.getElementById("resultado").innerText = "Por favor ingrese años válidos y asegúrese de que el año actual sea mayor o igual a los años de nacimiento.";
        return;
    }

    let edad1 = anoActual - anoNac1;
    let edad2 = anoActual - anoNac2;
    let edad3 = anoActual - anoNac3;

    let suma = edad1 + edad2 + edad3;
    let promedio = suma / 3;

    let message = '';

    if (edad1 > 17) {
        message += `Edad 1: ${edad1} años. Cumple con la mayoría de edad.\n\n`;
    } else {
        message += `Edad 1: ${edad1} años. NO cumple con la mayoría de edad.\n\n`;
    }

    if (edad2 > 17) {
        message += `Edad 2: ${edad2} años. Cumple con la mayoría de edad.\n\n`;
    } else {
        message += `Edad 2: ${edad2} años. NO cumple con la mayoría de edad.\n\n`;
    }

    if (edad3 > 17) {
        message += `Edad 3: ${edad3} años. Cumple con la mayoría de edad.\n\n`;
    } else {
        message += `Edad 3: ${edad3} años. NO cumple con la mayoría de edad.\n\n`;
    }

    if (suma > 17) {
        message += `La suma de las edades es: ${suma} años. Cumple con la mayoría de edad.\n\n`;
    } else {
        message += `La suma de las edades es: ${suma} años. NO cumple con la mayoría de edad.\n\n`;
    }

    document.getElementById("resultado").innerText = message;
}
