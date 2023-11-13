<?php

namespace Codexpress\viauy\modelo;

use PDOException;
use Codexpress\viauy\libs\Conexion;

class Viajes extends Conexion
{
  private $cod_viaje;
  private $origen;
  private $destino;
  private $demora;
  private $nro_linea;
  private $rut;
  
  public function __construct($cod_viaje, $origen, $destino, $demora, $nro_linea, $rut)
  {
    $this->cod_viaje = $cod_viaje;
    $this->origen = $origen;
    $this->destino = $destino;
    $this->demora = $demora;
    $this->nro_linea = $nro_linea;
    $this->rut = $rut;
    
  }

  public function idExists()
  {
    $pdo = $this->getConexion()->getPdo();

    try {
      $sqlSelect = 'SELECT cod_viaje FROM vehiculos WHERE cod_viaje = :cod_viaje';
      $stmtSelect = $pdo->prepare($sqlSelect);
      $stmtSelect->bindParam(':cod_viaje', $this->cod_viaje);
      $stmtSelect->execute();

      return $stmtSelect->fetch(PDO::FETCH_ASSOC) !== false;
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }

  // Guardar un viaje
  public function saveviajes()
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {
      $sqlInsert = 'INSERT INTO vehiculos (cod_viaje, origen, destino, demora, nro_linea, rut) VALUES (:cod_viaje, :origen, :destino, :demora, :nro_linea, :rut)';
      $stmtInsert = $pdo->prepare($sqlInsert);
      $stmtInsert->bindParam(':cod_viaje', $this->cod_viaje);
      $stmtInsert->bindParam(':origen', $this->origen);
      $stmtInsert->bindParam(':destino', $this->destino);
      $stmtInsert->bindParam(':demora', $this->demora);
      $stmtInsert->bindParam(':nro_linea', $this->nro_linea);
      $stmtInsert->bindParam(':rut', $this->rut);
  

      if ($stmtInsert->execute()) {
        return true;
      }
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }



  public function dropviajes($cod_viaje)
{
  $pdo = $this->getConexion()->getPdo();

  try {
    // Verificar si el viaje existe antes de eliminarlo
    $viajesData = $this->getviajesDataById($cod_viaje);

    if ($viajesData) {
      $query = "DELETE FROM vehiculos WHERE cod_viaje = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$cod_viaje]);

      return true; // Devolver true si la eliminación fue exitosa
    } else {
      return false; // Devolver false si el viaje no existe
    }
  } catch (\PDOException $e) {
    return false; // Devolver false si hubo un error
  }
}


public function editviajes()
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {
      $sqlUpdate = 'UPDATE viajes SET  origen = :origen, destino = :destino, demora = :demora, nro_linea = :nro_linea, rut = :rut WHERE cod_viaje = :cod_viaje';
      $stmtUpdate = $pdo->prepare($sqlUpdate);
      $stmtUpdate->bindParam(':cod_viaje', $this->cod_viaje);
      $stmtUpdate->bindParam(':origen', $this->origen);
      $stmtUpdate->bindParam(':destino', $this->destino);
      $stmtUpdate->bindParam(':demora', $this->demora);
      $stmtUpdate->bindParam(':nro_linea', $this->nro_linea);
      $stmtUpdate->bindParam(':rut', $this->rut);
      
      return $stmtUpdate->execute();
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }

public function getviajesDataById($cod_viaje)
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {

      $sqlSelect = 'SELECT * FROM vehiculos WHERE rut = :rut AND cod_viaje = :cod_viaje;';
      $stmtSelect = $pdo->prepare($sqlSelect);
      $stmtSelect->bindParam(':cod_viaje', $cod_viaje);
      $stmtSelect->bindParam(':rut', $_SESSION['correo_empresa']);
      $stmtSelect->execute();

      return $stmtSelect->fetch(PDO::FETCH_ASSOC);
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }
}
?>