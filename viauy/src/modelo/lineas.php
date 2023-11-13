<?php

namespace Codexpress\viauy\modelo;

use PDOException;
use Codexpress\viauy\libs\Conexion;

class lineas extends Conexion
{
  private $nro_linea;
  private $km;
  
  
  public function __construct($nro_linea, $km,)
  {
    $this->nro_linea = $nro_linea;
    $this->km = $km;
  
    
  }

  public function idExists()
  {
    $pdo = $this->getConexion()->getPdo();

    try {
      $sqlSelect = 'SELECT nro_linea FROM lineas WHERE nro_linea = :nro_linea';
      $stmtSelect = $pdo->prepare($sqlSelect);
      $stmtSelect->bindParam(':nro_linea', $this->nro_linea);
      $stmtSelect->execute();

      return $stmtSelect->fetch(PDO::FETCH_ASSOC) !== false;
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }

  // Guardar un lineas
  public function savelineas()
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {
      $sqlInsert = 'INSERT INTO lineas (nro_linea, km) VALUES (:nro_linea, :km)';
      $stmtInsert = $pdo->prepare($sqlInsert);
      $stmtInsert->bindParam(':nro_linea', $this->nro_linea);
      $stmtInsert->bindParam(':km', $this->km);
    
  

      if ($stmtInsert->execute()) {
        return true;
      }
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }



  public function droplineas($nro_linea)
{
  $pdo = $this->getConexion()->getPdo();

  try {
    // Verificar si el lineas existe antes de eliminarlo
    $lineasData = $this->getlineasDataById($nro_linea);

    if ($lineasData) {
      $query = "DELETE FROM lineas WHERE nro_linea = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$nro_linea]);

      return true; // Devolver true si la eliminación fue exitosa
    } else {
      return false; // Devolver false si el lineas no existe
    }
  } catch (\PDOException $e) {
    return false; // Devolver false si hubo un error
  }
}


public function editlineas()
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {
      $sqlUpdate = 'UPDATE lineas SET  km = :km, destino = :destino, demora = :demora, nro_linea = :nro_linea, rut = :rut WHERE nro_linea = :nro_linea';
      $stmtUpdate = $pdo->prepare($sqlUpdate);
      $stmtUpdate->bindParam(':nro_linea', $this->nro_linea);
      $stmtUpdate->bindParam(':km', $this->km);
    
      
      return $stmtUpdate->execute();
    } catch (\Throwable $th) {
      throw $th;
    } finally {
      $pdo = null;
    }
  }

public function getlineasDataById($nro_linea)
  {
    $pdo = Conexion::getConexion()->getPdo();

    try {

      $sqlSelect = 'SELECT * FROM lineas WHERE nro_linea = :linea AND km = :km;';
      $stmtSelect = $pdo->prepare($sqlSelect);
      $stmtSelect->bindParam(':nro_linea', $nro_linea);
      $stmtSelect->bindParam(':nro_linea', $_SESSION['correo_empresa']);
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