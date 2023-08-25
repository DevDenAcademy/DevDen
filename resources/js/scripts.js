
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

// letras cayendo
const fallingTextElements = document.querySelectorAll('.falling-text');
fallingTextElements.forEach(element => {
    element.classList.add('show');
});





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


    
// alerta para verificacion de campos y envio de datos
  document.addEventListener("DOMContentLoaded", function() {
    var formulario = document.getElementById('miFormulario');
    var botonEnviar = document.getElementById('enviar-boton');

    botonEnviar.addEventListener('click', function(event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        var nombre = document.getElementById('Nombre').value;
        var email = document.getElementById('Gmail').value;
        var mensaje = document.getElementById('Mensaje').value;

        if (nombre === "" || email === "" || mensaje === "") {
              alert("Por favor, completa todos los campos.");
        } else {
            formulario.submit(); // Envía el formulario si todo es válido
        }
    });
});