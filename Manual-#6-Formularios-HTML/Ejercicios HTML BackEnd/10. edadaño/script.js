
function calcularEdadAno() {
    let anoNacimiento = parseFloat(document.getElementById('anoNacimientoID').value);
    let anoActual = parseFloat(document.getElementById('anoActualID').value);

    if (isNaN(anoNacimiento) || isNaN(anoActual) || anoNacimiento <= 0 || anoActual <= 0 || anoActual < anoNacimiento) {
        document.getElementById("resultado").innerText = "Por favor ingrese años válidos y asegúrese de que el año actual sea mayor o igual al año de nacimiento.";
        return;
    }

    let edad = anoActual - anoNacimiento;

    if (edad >= 18) {
        document.getElementById("resultado").innerText = `Usted es mayor de Edad con: ${edad} Años.`;
    } else {
        document.getElementById("resultado").innerText = `Usted es Menor de Edad con: ${edad} Años.`;
    }
}

function validarInput(input) {
    let valor = parseFloat(input.value);

    if (valor === 0 || valor === -0) {
        input.value = '';
        document.getElementById("resultado").innerText = "Ingrese un valor válido.";
    }
}