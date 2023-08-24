
  // movimiento de iconos
const iconImages = document.querySelectorAll('.icon-container img');
        
iconImages.forEach(img => {
    img.addEventListener('mouseover', () => {
        img.style.transform = 'translateY(-10px)';
    });
            
    img.addEventListener('mouseout', () => {
        img.style.transform = 'translateY(0)';
    });
});
  /*-------letras cayendo---------------*/

  const fallingTextElements = document.querySelectorAll('.falling-text');
  fallingTextElements.forEach(element => {
      element.classList.add('show');
  });



  // -------------------------------------------------------------

  // Agregar evento de clic a todas las preguntas
  var acc = document.getElementsByClassName("accordion");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }


    // -------------------------------------------------------------

// Obtén una referencia al botón
var boton1 = document.getElementById("enviar-boton");

// Agrega un evento click al botón
boton1.addEventListener("click", function() {
  // Verificar si el formulario tiene datos antes de mostrar la alerta
  var formulario = document.getElementById("mi-formulario");
  var datosValidos = verificarDatos(formulario);

  if (datosValidos) {
    alert("¡Datos enviados correctamente!");
  } else {
    alert("Por favor completa el formulario antes de enviar.");
  }
});


function verificarDatos(formulario) {

  return true; // Cambia esto según tu lógica de validación
}
