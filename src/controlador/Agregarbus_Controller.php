<?php

use Codexpress\viauy\libs\Controlador;
use Codexpress\viauy\modelo\LogAD_Model;

require_once 'Bus.php';

class BusController {
    public function guardarBus() {
        // Verifica si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recoge los datos del formulario
            $matricula = $_POST["matricula"];
            $bano = $_POST["bano"];
            $wifi = $_POST["wifi"];
            $aire = $_POST["aire"];
            $cant_asientos = $_POST["cant_asientos"];
            $rut = $_POST["rut"];

            // Aquí podrías validar y sanitizar los datos si es necesario

            // Crea una instancia del modelo
            $busModel = new BusModel();

            // Llama al método para guardar el bus en la base de datos
            $resultado = $busModel->guardarBus($matricula, $bano, $wifi, $aire, $cant_asientos, $rut);

            if ($resultado) {
                echo json_encode(["message" => "Bus guardado correctamente"]);
            } else {
                echo json_encode(["message" => "Error al guardar el bus"]);
            }
        }
    }
}

// Crear una instancia del controlador
$busController = new BusController();

// Llamar al método para guardar el bus
$busController->guardarBus();

