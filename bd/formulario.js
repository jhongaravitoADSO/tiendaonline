document.addEventListener("DOMContentLoaded", function () {
    const formulario = {
      nombre: "",
      correo: "",
      opinion: "",
      calificacion: ""
    };
  
    const formElement = document.querySelector("form");
  
    formElement.addEventListener("submit", function (event) {
      event.preventDefault();
  
      // Capturar los valores del formulario
      formulario.nombre = document.getElementById("nombre").value;
      formulario.correo = document.getElementById("correo").value;
      formulario.opinion = document.getElementById("opinion").value;
      formulario.calificacion = document.getElementById("calificacion").value;
  
      // Mostrar los datos en la consola (puedes enviarlos a tu servidor en lugar de hacer esto)
      console.log(formulario);
  
      // Puedes enviar el formulario al servidor aquí si es necesario
    });
  });
  