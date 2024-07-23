document.addEventListener('DOMContentLoaded', function() {
    const listaNumeros = document.getElementById('lista-numeros');

    function calcularFactorial(n) {
        if (n === 0 || n === 1) return 1;
        return n * calcularFactorial(n - 1);
    }

    for (let i = 1; i <= 10; i++) {
        const numeroItem = document.createElement('tr');
        
        const numeroTd = document.createElement('td');
        numeroTd.textContent = i;
        numeroItem.appendChild(numeroTd);

        const factorialTd = document.createElement('td');
        factorialTd.textContent = calcularFactorial(i);
        numeroItem.appendChild(factorialTd);
        
        listaNumeros.appendChild(numeroItem);
    }
});
