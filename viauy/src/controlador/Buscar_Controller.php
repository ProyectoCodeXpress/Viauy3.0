<?php

use Codexpress\viauy\libs\Controlador;
use Codexpress\viauy\modelo\Buscar;

class Buscar_Controller extends Controlador
{
  // Renderizar la página de búsqueda
  public function buscar()
  {
    $this->cargarVista("index/index");
  }

  // Procesar la búsqueda
  public function doBuscar()
  {
    $res = new stdClass();
    $res->codigo = 200;

    try {
      // Recuperar los datos del formulario
      $tipoPasaje = $_GET["tipoPasaje"];
      $origen = $_GET["origen"];
      $destino = $_GET["destino"];
      $fecha_ida = $_GET["fecha_ida"];
      $fecha_vuelta = $_GET["fecha_vuelta"];
      $nro_asiento = $_GET["nro_asiento"];

      // Crear instancias de las clases necesarias
      $pasajes = new Pasajes($nro_asiento);
      $viajes = new Viajes($origen, $destino, $fecha_ida, $fecha_vuelta);

      // Lógica para realizar la búsqueda en la base de datos o cualquier acción necesaria
      // ...

      // Puedes retornar algún mensaje o información adicional si es necesario
      $res->res = [
        'message' => 'Búsqueda realizada exitosamente',
      ];

      $this->cargarVista("php/producto", $res);
    } catch (\Throwable $th) {
      // Manejar cualquier error que pueda ocurrir durante la ejecución
      $res->codigo = 500;
      $res->res = [
        'message' => 'Error en la búsqueda: ' . $th->getMessage(),
      ];

      $this->cargarVista("php/producto", $res);
    }
  }
}

?>
