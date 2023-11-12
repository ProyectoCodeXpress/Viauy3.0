<?php


use Codexpress\viauy\libs\Controlador;
use Codexpress\viauy\modelo\Asiento;


// Obtiene los datos de los pasajes desde el modelo
$datosDePasajes = obtenerDatosDePasajes();

// Convierte los datos de pasajes en un formato que se pueda usar en JavaScript
$datosAsientos = json_encode($datosDePasajes);

// Incluye la vista para mostrar los resultados
include 'vista/index/asientos.php';
?>
