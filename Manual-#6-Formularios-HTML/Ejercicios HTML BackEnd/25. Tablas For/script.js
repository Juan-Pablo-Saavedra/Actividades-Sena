function mostrarTablas() {
    let tabla = parseFloat(document.getElementById('tablaID').value);
    let resultadosDiv = document.getElementById('resultados');
    let resultadosParesEImparesDiv = document.getElementById('resultadosParesEImpares');
    resultadosDiv.innerHTML = "";  // Limpiar contenido anterior
    resultadosParesEImparesDiv.innerHTML = "";  // Limpiar contenido anterior

    let pares = 0;
    let impares = 0;

    for (let i = 1; i <= tabla; i++) {
        let tablaDiv = document.createElement('div');
        tablaDiv.className = 'tabla-container';

        let titulo = document.createElement('h3');
        titulo.textContent = 'Tabla del ' + i;
        titulo.className = 'titulo_Tabla';
        tablaDiv.appendChild(titulo);

        for (let ii = 1; ii <= 10; ii++) {
            let resultado = i * ii;
            let resultadoTexto = document.createElement('p');

            if (resultado % 2 === 0) {
                resultadoTexto.textContent = `${i} x ${ii} = ${resultado} - Par`;
                pares++;
            } else {
                resultadoTexto.textContent = `${i} x ${ii} = ${resultado} - Impar`;
                impares++;
            }

            tablaDiv.appendChild(resultadoTexto);
        }

        resultadosDiv.appendChild(tablaDiv);
    }

    let conteoPares = document.createElement('p');
    conteoPares.textContent = `Pares: ${pares}`;
    resultadosParesEImparesDiv.appendChild(conteoPares);

    let conteoImpares = document.createElement('p');
    conteoImpares.textContent = `Impares: ${impares}`;
    resultadosParesEImparesDiv.appendChild(conteoImpares);
}
