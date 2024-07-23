function suma() {
    let numeroUnoInput = document.getElementById("numeroUnoInput");
    let numeroDosInput = document.getElementById("numeroDosInput");

    let numeroUno = parseFloat(numeroUnoInput.value);
    let numeroDos = parseFloat(numeroDosInput.value);

    let resultado = numeroUno + numeroDos;

    document.getElementById("suma").innerText = ("El resultado de " + numeroUno + " + " + numeroDos + " es: " + resultado)
}


function resta() {
    let numeroUnoInput = document.getElementById("numeroUnoInput");
    let numeroDosInput = document.getElementById("numeroDosInput");

    let numeroUno = parseFloat(numeroUnoInput.value);
    let numeroDos = parseFloat(numeroDosInput.value);

    let resultado = numeroUno - numeroDos;

    document.getElementById("resta").innerText = ("El resultado de " + numeroUno + " - " + numeroDos + " es: " + resultado)

}


function multiplicacion() {
    let numeroUnoInput = document.getElementById("numeroUnoInput");
    let numeroDosInput = document.getElementById("numeroDosInput");

    let numeroUno = parseFloat(numeroUnoInput.value);
    let numeroDos = parseFloat(numeroDosInput.value);

    let resultado = numeroUno * numeroDos;

    document.getElementById("multiplicacion").innerText = ("El resultado de " + numeroUno + " * " + numeroDos + " es: " + resultado)

}

function division() {
    let numeroUnoInput = document.getElementById("numeroUnoInput");
    let numeroDosInput = document.getElementById("numeroDosInput");

    let numeroUno = parseFloat(numeroUnoInput.value);
    let numeroDos = parseFloat(numeroDosInput.value);

    let resultado = numeroUno / numeroDos;

    document.getElementById("division").innerText = ("El resultado de " + numeroUno + " / " + numeroDos + " es: " + resultado)

}
