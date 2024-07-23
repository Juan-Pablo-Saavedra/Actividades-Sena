function suma() {
    let numeroUnoInput = document.getElementById("numeroUnoInput");
    let numeroDosInput = document.getElementById("numeroDosInput");

    let numeroUno = parseFloat(numeroUnoInput.value);
    let numeroDos = parseFloat(numeroDosInput.value);

    let resultado = numeroUno + numeroDos;

    document.getElementById("suma").innerText = ("El resultado de " + numeroUno + " + " + numeroDos + " es: " + resultado);
    return false;


}
