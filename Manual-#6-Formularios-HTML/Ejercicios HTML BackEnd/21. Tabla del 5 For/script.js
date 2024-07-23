function tablaDel5() {
    let resultado = "";

    for (let numero1 = 1; numero1 <= 5; numero1++) {
        resultado += `5 x ${numero1} = ${5 * numero1}\n`;
    }

    document.getElementById("resultado").innerText = `Tabla del 5:\n${resultado}`;
}
