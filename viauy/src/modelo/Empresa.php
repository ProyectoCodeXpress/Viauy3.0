<?php

namespace Codexpress\viauy\modelo;

use PDOException;
use Codexpress\viauy\libs\Conexion;

class Empresa extends Conexion
{
    private $nombre_empresa;
    private $rut;
    private $correo_empresa;
    private $contrasena_empresa;

    public function __construct($nombre_empresa, $rut, $correo_empresa, $contrasena_empresa)
    {
        $this->nombre_empresa = $nombre_empresa;
        $this->rut = $rut;
        $this->correo_empresa = $correo_empresa;
        $this->contrasena_empresa = $contrasena_empresa;
    }

    
    public function loginEmpresa()
    {
        $pdo = $this->getConexion()->getPdo();

        try {
            $sql = 'SELECT * FROM empresa WHERE correo_empresa = :correo_empresa';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':correo_empresa', $this->correo_empresa);
            $stmt->execute();
            $empresa = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($this->contrasena_empresa == $empresa["contrasena_empresa"]) {
                $_SESSION['correo_empresa'] = $empresa['correo_empresa'];
                // Puedes agregar más información a la sesión según sea necesario

                return 'success'; // Devolver un indicador de inicio de sesión exitoso
            } else {
                return 'Correo o contraseña incorrectos';
            }
        } catch (\Throwable $th) {
            return 'Ocurrió un error durante el inicio de sesión';
        } finally {
            $pdo = null;
        }
    }
}