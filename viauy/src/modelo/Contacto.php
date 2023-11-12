<?php

namespace Codexpress\viauy\modelo;

use PDOException;
use Codexpress\viauy\libs\Conexion;

class FormularioModelo {

    private $conexion;

    public function procesarFormulario($nombre, $mail, $mensaje) {

        $pdo = Conexion::getConexion()->getPdo();

        try {
            if (empty($nombre) || empty($mail) || empty($mensaje)) {
                throw new Exception('Por favor, complete todos los campos.');
            }

            // Aquí podrías realizar operaciones adicionales con los datos si es necesario.

            return true; // Indica que el formulario se procesó con éxito.
        } catch (Exception $e) {
            return $e->getMessage(); // Devuelve el mensaje de error.
        }
    }

}

?>
