  
  
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

