function calcularNumeroMayor() {
    let numero1 = parseFloat(document.getElementById('numero1ID').value);
    let numero2 = parseFloat(document.getElementById('numero2ID').value);

    if (isNaN(numero1) || isNaN(numero2)) {
        document.getElementById("resultado").innerText = "Por favor ingrese números válidos.";
        return;
    }

    if (numero1 < numero2) {
        document.getElementById("resultado").innerText = `El Número ${numero2} es Mayor.`;
    } else if (numero1 > numero2) {
        document.getElementById("resultado").innerText = `El Número ${numero1} es Mayor.`;
    } else {
        document.getElementById("resultado").innerText = "Ambos números son iguales.";
    }
}
