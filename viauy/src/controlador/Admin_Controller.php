<?php

use Codexpress\viauy\libs\Controlador;
use Codexpress\viauy\modelo\LogAD_Model;

class Admin extends Controlador
{
    public function login()
    {
        $correo_empresa = $_POST['correo_empresa'];
        $contrasena_empresa = $_POST['contrasena_empresa'];

        $logAD_Model = new LogAD_Model();

        if ($logAD_Model->loginEmpresa($correo_empresa, $contrasena_empresa)) {
            // Datos válidos, redirige a la vista de administrador
            header("Location: ?c=index&m=admin");
        } else {
            // Datos inválidos, muestra un mensaje de alerta
            echo "<script>alert('Datos de inicio de sesión incorrectos');</script>";
            // Puedes redirigir a otra vista o realizar alguna acción adicional si es necesario
             header("Location: ?c=index&m=login");
        }
    }
}

?>
