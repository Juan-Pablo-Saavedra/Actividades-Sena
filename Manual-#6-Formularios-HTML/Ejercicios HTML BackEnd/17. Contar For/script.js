function contar() {
    let numero = parseInt(document.getElementById('numeroID').value);

    if (isNaN(numero) || numero <= 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese un número válido mayor que 0.";
        return;
    }

    let numerosRepetidos = "";

    for (let i = 1; i <= numero; i++) {
        numerosRepetidos += i + "  ";
    }

    document.getElementById("resultado").innerText = `Números en el ciclo For:\n${numerosRepetidos}`;
}
