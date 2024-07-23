function porcentajeNotas(){
    let nota1 = parseFloat(document.getElementById("nota1Input").value);
    let nota2 = parseFloat(document.getElementById("nota2Input").value);
    let nota3 = parseFloat(document.getElementById("nota3Input").value);

    let porcentaje1 = nota1 * 0.3;
    let porcentaje2 = nota2 * 0.3;
    let porcentaje3 = nota3 * 0.4;

    let suma = porcentaje1 + porcentaje2 + porcentaje3;

    document.getElementById("porcentajeNotas").innerText = `Porcentajes:
        Porcentaje nota 1: ${porcentaje1.toFixed(2)}
        Porcentaje nota 2: ${porcentaje2.toFixed(2)}
        Porcentaje nota 3: ${porcentaje3.toFixed(2)}
        La suma de los porcentajes es: ${suma.toFixed(2)}`;
}
