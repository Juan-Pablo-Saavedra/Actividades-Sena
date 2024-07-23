function calcularNotas() {
    let nota1 = parseFloat(document.getElementById('nota1ID').value);
    let nota2 = parseFloat(document.getElementById('nota2ID').value);
    let nota3 = parseFloat(document.getElementById('nota3ID').value);

    if (isNaN(nota1) || isNaN(nota2) || isNaN(nota3) || 
        nota1 < 0 || nota1 > 5 || nota2 < 0 || nota2 > 5 || nota3 < 0 || nota3 > 5) {
        document.getElementById("resultado").innerText = "Por favor ingrese notas válidas (entre 0 y 5).";
        return;
    }

    let porcentaje1 = nota1 * (20 / 100);
    let porcentaje2 = nota2 * (35 / 100);
    let porcentaje3 = nota3 * (45 / 100);
    let suma = porcentaje1 + porcentaje2 + porcentaje3;

    let mensaje = '';

    if (suma > 4.5) {
        mensaje = "La nota es Superior.";
    } else if (suma > 3.5) {
        mensaje = "La nota es Buena.";
    } else if (suma > 3) {
        mensaje = "La nota es Media.";
    } else {
        mensaje = "La nota es Mala...";
    }

    document.getElementById("resultado").innerText = mensaje;
}
