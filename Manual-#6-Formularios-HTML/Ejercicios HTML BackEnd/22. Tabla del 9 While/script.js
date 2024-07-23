function tablaDel9() {
    let resultado = "";

    for (let numero1 = 1; numero1 <= 10; numero1++) {
        resultado += `9 x ${numero1} = ${9 * numero1}\n`;
    }

    document.getElementById("resultado").innerText = `Tabla del 9:\n${resultado}`;
}
