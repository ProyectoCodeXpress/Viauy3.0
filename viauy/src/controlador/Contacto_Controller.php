<?php

use Codexpress\viauy\libs\Controlador;
use Codexpress\viauy\modelo\Contacto;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $mensaje = $_POST['mensaje'];

        // Validar datos (puedes agregar tus propias validaciones aquí)
        // Por ejemplo, puedes verificar si el mail es válido, si el nombre no está vacío, etc.

        if (empty($nombre) || empty($mail) || empty($mensaje)) {
            throw new Exception('Por favor, complete todos los campos.');
        }

        // Procesar los datos (por ejemplo, enviar mail electrónico, almacenar en base de datos, etc.)
        // Aquí puedes agregar tu lógica para procesar los datos del formulario

        // Si todo va bien, redirigir a una página de éxito
        header("Location: exito.php");
        exit();
    } catch (Exception $e) {
        // Capturar cualquier excepción y manejarla aquí
        $error_message = $e->getMessage();
    }
}

// Si hubo un error o no se envió el formulario, puedes redirigir a una página de error o simplemente mostrar un mensaje en esta página

?>