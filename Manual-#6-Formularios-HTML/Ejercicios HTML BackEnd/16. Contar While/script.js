function contar() {
    let numero = parseInt(document.getElementById('numeroID').value);

    if (isNaN(numero) || numero <= 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese un número válido mayor que 0.";
        return;
    }

    let i = 1;
    let numerosRepetidos = "";

    while (i <= numero) {
        numerosRepetidos += i + " ";
        i++;
    }

    document.getElementById("resultado").innerText = `Números en el ciclo While:\n${numerosRepetidos}`;
}
