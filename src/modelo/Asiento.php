<?php

namespace Codexpress\viauy\modelo;

function obtenerDatosDePasajes() {
    // Debes establecer la conexión a la base de datos y realizar una consulta SQL.
    // En este ejemplo, simularemos la obtención de datos con un array.
    $datosDePasajes = [
        ['nro_asiento' => 1, 'asientos_disponibles' => true],
        ['nro_asiento' => 2, 'asientos_disponibles' => false],
        ['nro_asiento' => 3, 'asientos_disponibles' => true],
        // Agrega más datos según tu base de datos
    ];

    return $datosDePasajes;
}

