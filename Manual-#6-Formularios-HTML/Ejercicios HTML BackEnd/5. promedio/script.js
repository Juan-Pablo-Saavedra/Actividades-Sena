

function promedio(){
    let nota1 = parseFloat(document.getElementById("nota1Input").value);
    let nota2 = parseFloat(document.getElementById("nota2Input").value);
    let nota3 = parseFloat(document.getElementById("nota3Input").value);

    let resultado = (nota1 + nota2 + nota3 ) / 3 

    document.getElementById("promedio").innerText = ("El promedio de " + nota1 + ", " + nota2 +" y "+ nota3 + " Es: " + resultado);
    
}