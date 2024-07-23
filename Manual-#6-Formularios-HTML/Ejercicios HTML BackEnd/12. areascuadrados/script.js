function areaCuadrados() {
    let lado1 = parseFloat(document.getElementById('lado1ID').value);
    let lado2 = parseFloat(document.getElementById('lado2ID').value);
    let lado3 = parseFloat(document.getElementById('lado3ID').value);

    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3) || lado1 <= 0 || lado2 <= 0 || lado3 <= 0) {
        document.getElementById("resultado").innerText = "Por favor ingrese lados válidos y mayores que 0.";
        return;
    }

    let area1 = lado1 * lado1;
    let area2 = lado2 * lado2;
    let area3 = lado3 * lado3;

    if (area1 === area2 && area1 === area3) {
        document.getElementById("resultado").innerText = `Todas las áreas son iguales: ${area1}`;
    } else if (area1 > area2 && area1 > area3) {
        document.getElementById("resultado").innerText = `El cuadrado con el lado ${lado1} tiene la mayor área: ${area1}`;
    } else if (area2 > area1 && area2 > area3) {
        document.getElementById("resultado").innerText = `El cuadrado con el lado ${lado2} tiene la mayor área: ${area2}`;
    } else if (area3 > area1 && area3 > area2) {
        document.getElementById("resultado").innerText = `El cuadrado con el lado ${lado3} tiene la mayor área: ${area3}`;
    }
}
