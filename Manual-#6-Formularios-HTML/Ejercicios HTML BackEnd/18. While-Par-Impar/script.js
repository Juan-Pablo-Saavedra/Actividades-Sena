async function calcularPareImpar() {
    let numero = parseInt(document.getElementById('numeroID').value);

    if (isNaN(numero) || numero <= 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese un número válido mayor que 0.";
        return;
    }

    let resultado = "";
    let i = 1;

    while (i <= numero) {
        let mensaje = `${i} es ${i % 2 === 0 ? "par" : "impar"}\n`;
        resultado += mensaje;
        i++;
    }

    document.getElementById("resultado").innerText = resultado;
}
