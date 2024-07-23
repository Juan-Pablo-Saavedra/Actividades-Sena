document.addEventListener('DOMContentLoaded', () => {
    let arregloNumeros = [];
    let resultadoPrint = '';

    for (let i = 1; i <= 10; i++) {
        arregloNumeros.push(i);
    }

    function calcularFactorial(n) {
        if (n === 0 || n === 1) return 1;
        return n * calcularFactorial(n - 1);
    }

    for (let i = 0; i < arregloNumeros.length; i++) {
        const numero = arregloNumeros[i];
        const factorial = calcularFactorial(numero);
        resultadoPrint += `<tr><td>${numero}</td><td>${factorial}</td></tr>`;
    }

    console.log(resultadoPrint);
    document.getElementById('lista-numeros').innerHTML = resultadoPrint;
});
 