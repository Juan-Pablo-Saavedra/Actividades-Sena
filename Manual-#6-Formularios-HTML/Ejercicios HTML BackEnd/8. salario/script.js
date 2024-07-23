function calcularSalario() {
    let diasTrabajados = parseFloat(document.getElementById("diasTrabajados").value);
    let valorPorDia = parseFloat(document.getElementById("valorPorDia").value);

    if (isNaN(diasTrabajados) || isNaN(valorPorDia) || diasTrabajados <= 0 || valorPorDia <= 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese valores válidos y mayores que 0 para días trabajados y valor por día.";
        return;
    }

    let salario = diasTrabajados * valorPorDia;
    let salud = salario * 0.12;
    let pension = salario * 0.16;
    let arl = salario * 0.052;
    let descuento = salud + pension + arl;
    let totalPagar = salario - descuento;

    document.getElementById("resultado").innerText = `Resultados:
Salario: ${salario.toFixed(2)}
Salud: ${salud.toFixed(2)}
Pensión: ${pension.toFixed(2)}
ARL: ${arl.toFixed(2)}
Descuento: ${descuento.toFixed(2)}
Total a Pagar: ${totalPagar.toFixed(2)}`;
}
