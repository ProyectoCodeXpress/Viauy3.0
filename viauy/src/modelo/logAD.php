<?php

namespace Codexpress\viauy\modelo;

use Codexpress\viauy\libs\Conexion;

class LogAD
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::getConexion()->getPdo();
    }

    public function loginEmpresa($correo_empresa, $contrasena_empresa)
    {
        try {
            $query = "SELECT * FROM empresas WHERE correo_empresa = :correo_empresa AND contrasena_empresa = :contrasena_empresa";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':correo_empresa', $correo_empresa);
            $stmt->bindParam(':contrasena_empresa', $contrasena_empresa);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true; // Datos válidos
            } else {
                return false; // Datos inválidos
            }
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}

?>
