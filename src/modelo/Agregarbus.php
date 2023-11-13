<?php

namespace Codexpress\viauy\banoo;

use PDOException;
use Codexpress\viauy\libs\Conexion;

class Bus extends Conexion
{
  private $matricula;
  private $bano;
  private $wifi;
  private $aire;
  private $cant_asientos;
  private $rut;
  
  public function __construct($matricula, $bano, $wifi, $aire, $cant_asientos, $rut)
  {
    $this->matricula = $matricula;
    $this->bano = $bano;
    $this->wifi = $wifi;
    $this->aire = $aire;
    $this->cant_asientos = $cant_asientos;
    $this->rut = $rut;
    
  }

  public function idExists()
  {
    $pdo = $this->getConexion()->getPdo();

    try {
      $sqlSelect = 'SELECT matricula FROM vehiculos WHERE matricula = :matricula';
      $stmtSelect = $pdo->prepare($sqlSelect);
      $stmtSelect->bindParam(':matricula', $this->matricula);
      $stmtSelect->execute();

      return $stmtSelect->fetch(PDO::FETCH_ASSOC) !== false;
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }

  // Guardar un vehiculo
  public function saveBus()
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {
      $sqlInsert = 'INSERT INTO vehiculos (matricula, bano, wifi, aire, cant_asientos, rut) VALUES (:matricula, :bano, :wifi, :aire, :cant_asientos, :rut)';
      $stmtInsert = $pdo->prepare($sqlInsert);
      $stmtInsert->bindParam(':matricula', $this->matricula);
      $stmtInsert->bindParam(':bano', $this->bano);
      $stmtInsert->bindParam(':wifi', $this->wifi);
      $stmtInsert->bindParam(':aire', $this->aire);
      $stmtInsert->bindParam(':cant_asientos', $this->cant_asientos);
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



  public function dropBus($matricula)
{
  $pdo = $this->getConexion()->getPdo();

  try {
    // Verificar si el bus existe antes de eliminarlo
    $busData = $this->getBusDataById($matricula);

    if ($busData) {
      $query = "DELETE FROM vehiculos WHERE matricula = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$matricula]);

      return true; // Devolver true si la eliminación fue exitosa
    } else {
      return false; // Devolver false si el bus no existe
    }
  } catch (\PDOException $e) {
    return false; // Devolver false si hubo un error
  }
}


public function editBus()
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {
      $sqlUpdate = 'UPDATE vehiculos SET  bano = :bano, wifi = :wifi, aire = :aire, cant_asientos = :cant_asientos, rut = :rut WHERE matricula = :matricula';
      $stmtUpdate = $pdo->prepare($sqlUpdate);
      $stmtUpdate->bindParam(':matricula', $this->matricula);
      $stmtUpdate->bindParam(':bano', $this->bano);
      $stmtUpdate->bindParam(':wifi', $this->wifi);
      $stmtUpdate->bindParam(':aire', $this->aire);
      $stmtUpdate->bindParam(':cant_asientos', $this->cant_asientos);
      $stmtUpdate->bindParam(':rut', $this->rut);
      
      return $stmtUpdate->execute();
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }

public function getBusDataById($matricula)
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {

      $sqlSelect = 'SELECT * FROM vehiculos WHERE rut = :rut AND matricula = :matricula;';
      $stmtSelect = $pdo->prepare($sqlSelect);
      $stmtSelect->bindParam(':matricula', $matricula);
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