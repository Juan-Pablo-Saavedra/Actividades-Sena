function porcentaje() {
    let numero = parseFloat(document.getElementById("numeroInput").value);
    let porcentaje = parseFloat(document.getElementById("porcentajeInput").value);

    let resultado = (porcentaje / 100) * numero;

    document.getElementById("porcentaje").innerText = (porcentaje + "% de " + numero + " es: " + resultado);

}
