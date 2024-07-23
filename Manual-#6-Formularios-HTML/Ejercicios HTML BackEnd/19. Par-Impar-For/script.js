async function calcularPareImpar() {
    let numero = parseInt(document.getElementById('numeroID').value);

    if (isNaN(numero) || numero <= 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese un número válido mayor que 0.";
        return;
    }

    let resultado = "";

    for (let i = 1; i <= numero; i++) {
        let mensaje = `${i} es ${i % 2 === 0 ? "par" : "impar"}\n`;
        resultado += mensaje;
    }

    document.getElementById("resultado").innerText = resultado;
}
