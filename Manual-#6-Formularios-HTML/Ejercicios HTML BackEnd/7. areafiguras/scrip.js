function calcularAreaCuadrado() {
    let lado1 = parseFloat(document.getElementById("ladoCuadrado1").value);
    let lado2 = parseFloat(document.getElementById("ladoCuadrado2").value);


    if (lado1 === lado2 && lado2) {
        let area = lado1 * lado1;
        mostrarFiguraCuadrado(lado1, area);
    } else {
        swal({
            icon: "error",
            title: "Todos los lados deben ser iguales",
        });
    }
}

function mostrarFiguraCuadrado(lado, area) {
     //REMPLAZAR CON ALERT 
}




function calcularAreaRectangulo() {
    let lado1 = parseFloat(document.getElementById("ladoRectangulo1").value);
    let lado2 = parseFloat(document.getElementById("ladoRectangulo2").value);

    if (lado1 > 0 && lado2 > 0) {
        let area = lado1 * lado2;
        mostrarFiguraRectangulo(lado1, lado2, area);
    } else {
        swal({
            icon: "error",
            title: "Los lados deben ser mayores que 0",
        });
    }
}

function mostrarFiguraRectangulo(lado1, lado2, area) {
    //REMPLAZAR CON ALERT 
}



function calcularAreaTriangulo() {
    let base = parseFloat(document.getElementById("baseTriangulo").value);
    let altura = parseFloat(document.getElementById("alturaTriangulo").value);

    if (base > 0 && altura > 0) {
        let area = (base * altura) / 2;
        mostrarFiguraTriangulo(base, altura, area);
    } else {
        swal({
            icon: "error",
            title: "La base y la altura deben ser mayores que 0",
        });
    }
}

function mostrarFiguraTriangulo(base, altura, area) {
    //REMPLAZAR CON ALERT 
}


