document.addEventListener("DOMContentLoaded", function () {
  const signupForm = document.getElementById("signup-form");
  const dataMsg = document.getElementById("data-msg");
  const nombreInput = document.getElementById("nombre_empresa");
  const correoInput = document.getElementById("correo_empresa");
  const contrasenaInput = document.getElementById("contrasena_empresa");
  const contrasena_empresaCInput = document.getElementById("contrasena_empresaC");
  const rut_empresaInput = document.getElementById("rut_empresa");

  signupForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar el envío automático del formulario

    // Aquí puedes escribir el código para tomar los valores de los campos del formulario
    const nombre = nombreInput.value.trim();
    const correo = correoInput.value.trim();
    const contrasena = contrasenaInput.value.trim();
    const contrasenaC = contrasena_empresaCInput.value.trim();
    const rut = rut_empresaInput.value.trim();

    // Función para agregar o eliminar la clase "campo-vacio" en función de si el campo está vacío
    function validarCampo(campo, data) {
      if (data === "") {
        campo.classList.add("campo-vacio");
        dataMsg.innerHTML = "Complete los Campos Vacíos";
      } else {
        campo.classList.remove("campo-vacio");
      }
    }

    // Función para validar que el nombre de usuario contiene solo letras y números
    function validarNombreUsuario(nombreUsuario) {
      const regex = /^[a-zA-Z0-9]+$/; // Expresión regular que permite solo letras y números
      return regex.test(nombreUsuario);
    }

    // Validar campos vacíos
    validarCampo(rut_empresaInput, rut);
    validarCampo(nombreInput, nombre);
    validarCampo(correoInput, correo );
    validarCampo(contrasenaInput, contrasena);
    validarCampo(contrasena_empresaCInput, contrasenaC);
   

    // Validación de longitud para contraseñas y nombres de usuario
    if (contrasena.length < 8 || contrasena.length > 18) {
      dataMsg.innerHTML = "La contraseña debe tener entre 8 y 18 caracteres.";
      dataMsg.classList.remove("msg-success");
      dataMsg.classList.add("msg-error");
      return;
    }

    if (nombre.length < 6 || nombre.length > 18) {
      dataMsg.innerHTML =
        "El nombre de usuario debe tener entre 6 y 18 caracteres.";
      dataMsg.classList.remove("msg-success");
      dataMsg.classList.add("msg-error");
      return;
    }

    // Verificar que el nombre de usuario contiene solo letras y números
    if (!validarNombreUsuario(nombre)) {
      dataMsg.innerHTML =
        "El nombre de usuario solo puede contener letras y números.";
      dataMsg.classList.remove("msg-success");
      dataMsg.classList.add("msg-error");
      return;
    }

    // Verificar si algún campo de correo electrónico está vacío
    if (correo === "") {
      dataMsg.innerHTML = "Por favor, llena el campo de correo electrónico.";
      dataMsg.classList.remove("msg-success");
      dataMsg.classList.add("msg-error");
      return;
    }

    // Verificar que las contraseñas coincidan
    if (contrasena !== contrasenaC) {
      dataMsg.innerHTML = "Las contraseñas no coinciden.";
      dataMsg.classList.remove("msg-success");
      dataMsg.classList.add("msg-error");
      return;
    }
    // Crear un objeto FormData y agregar los datos del formulario
    const formData = new FormData();
    formData.append("correo", correo);
    formData.append("nombre", nombre);
    formData.append("contrasena", contrasena);
    formData.append("contrasenaC", contrasenaC);
    formData.append("rut",rut);

    // Crear una solicitud POST
    fetch("index.php?c=empresa&m=doSignup", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        // Manejar la respuesta del controlador PHP aquí
        if (data.message) {
          dataMsg.innerHTML = data.message;
          dataMsg.classList.remove("msg-error");
          dataMsg.classList.add("msg-success");
        } else {
          dataMsg.innerHTML = "Respuesta inesperada del servidor";
          dataMsg.classList.remove("msg-success");
          dataMsg.classList.add("msg-error");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});