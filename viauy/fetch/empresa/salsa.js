document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector(".login-form");
    const dataMsg = document.getElementById("data-msg");
    const correoInput = document.getElementById("correo_empresa");
    const contrasenaInput = document.getElementById("contrasena_empresa");
  
    loginForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Evitar el envío automático del formulario
  
      // Aquí puedes escribir el código para tomar los valores de los campos del formulario
      const correo = correoInput.value.trim();
      const contrasena = contrasenaInput.value.trim();
  
      // Función para agregar o eliminar la clase "campo-vacio" en función de si el campo está vacío
      function validarCampo(campo, data) {
        if (data === "") {
          campo.classList.add("campo-vacio");
          dataMsg.innerHTML = "Complete los Campos Vacíos";
        } else {
          campo.classList.remove("campo-vacio");
        }
      }
  
      // Validar campos vacíos
      validarCampo(correoInput, correo);
      validarCampo(contrasenaInput, contrasena);
  
      // Validación de longitud para contraseñas y correos
      if (contrasena.length < 6 || contrasena.length > 18) {
        dataMsg.innerHTML = "La contraseña debe tener entre 8 y 18 caracteres.";
        dataMsg.classList.remove("msg-success");
        dataMsg.classList.add("msg-error");
        return;
      }
  
      // Verificar si algún campo de correo o contraseña está vacío
      if (correo === "") {
        dataMsg.innerHTML = "Por favor, llena el campo de Correo.";
        dataMsg.classList.remove("msg-success");
        dataMsg.classList.add("msg-error");
        return;
      }
  
      // Crear un objeto FormData y agregar los datos del formulario
      const formData = new FormData();
      formData.append("correo_empresa", correo);
      formData.append("contrasena_empresa", contrasena);
  
      // Crear una solicitud POST para el inicio de sesión
      fetch("index.php?c=empresa&m=doLogin", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          // Manejar la respuesta del controlador PHP aquí
          if (data.message === "success") {
            // Redirigir a una página de bienvenida para la empresa
            window.location.href = "index.php?c=Empresa&m=bus";
          } else {
            dataMsg.innerHTML = data.message;
            dataMsg.classList.remove("msg-success");
            dataMsg.classList.add("msg-error");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
  });