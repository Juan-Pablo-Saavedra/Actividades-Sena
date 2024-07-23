function calcularSalarioPersona() {
    let salarioMinimo = parseFloat(document.getElementById('salarioMinimoID').value);
    let diasTrabajados = parseFloat(document.getElementById('diasTrabajadosID').value);
    let pagoDia = parseFloat(document.getElementById('pagoDiaID').value);
    let subTransporte = parseFloat(document.getElementById('subTransporteID').value);

    if (isNaN(salarioMinimo) || isNaN(diasTrabajados) || isNaN(pagoDia) || isNaN(subTransporte) || 
        salarioMinimo <= 0 || diasTrabajados <= 0 || pagoDia <= 0 || subTransporte < 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese valores válidos y mayores que 0.";
        return;
    }

    let sueldo = pagoDia * diasTrabajados;

    if (sueldo > salarioMinimo * 2) {
        sueldo += subTransporte;
    }

    let salud = sueldo * 0.12;
    let pension = sueldo * 0.16;
    let arl = salarioMinimo * 0.052;
    let deducible = salud + pension + arl;

    if (sueldo > salarioMinimo * 4) {
        let deduccionAdicional = sueldo * 0.04;
        deducible += deduccionAdicional;
    }

    let pagoTotal = sueldo - deducible;

    let message = `Resultados:\n
                Salud: ${salud.toFixed(2)}\n
                Pensión: ${pension.toFixed(2)}\n
                ARL: ${arl.toFixed(2)}\n
                Sueldo TOTAL: ${pagoTotal.toFixed(2)}`;

    document.getElementById("resultado").innerText = message;
}
