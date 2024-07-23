

function calcularEdad() {
  let edad = parseFloat(document.getElementById('edad').value);

  if (isNaN(edad) || edad < 0) {
      document.getElementById("resultado").innerText = "Por favor ingrese una edad válida y positiva.";
  } else if (edad > 18) {
      document.getElementById("resultado").innerText = "Usted es Mayor de edad.";
  } else {
      document.getElementById("resultado").innerText = "Usted es Menor de Edad.";
  }
}