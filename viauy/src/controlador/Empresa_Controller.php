<?php

use Codexpress\viauy\libs\Controlador;
use Codexpress\viauy\modelo\Empresa;


class Empresa_Controller extends Controlador
{
  // renderizar
  public function login()
  {
    $this->cargarVista("empresa/login");
  }
  // do
  public function doLogin()
{
    $correo_empresa = $_POST['correo_empresa'];
    $contrasena_empresa = $_POST['contrasena_empresa'];

    $empresa = new Empresa('', '', $correo_empresa, $contrasena_empresa);
    $loginResult = $empresa->loginEmpresa();
    $data = [
        'message' => $loginResult
    ];

    if ($loginResult === 'success') {
        // Inicio de sesión exitoso, redirigir a una página de bienvenida para la empresa
        echo json_encode($data);
    } else {
        echo json_encode($data);
    }
}

public function logout()
  {
    session_destroy();
    header("Location: index.php?c=empresa&m=login");
    exit();
  }
}