<?php
require_once("Conexion.php");
require_once("Usuario.php");

class CatedraticoDAO
{
  public function insertar(Catedratico $catedratico)
  {
    try {
      $con = Conexion::getConexion();

      $sql = "INSERT INTO catedratico (nombre, ape_paterno, ape_materno, dni, celular, correo, carrera,modalidad,password)
                VALUES (:nombre, :ape_paterno, :ape_materno, :dni, :celular, :correo, :carrera,:modalidad,:password)";

      $query = $con->prepare($sql);

      $query->bindValue(':nombre', $catedratico->nombre);
      $query->bindValue(':ape_paterno',  $catedratico->apePaterno);
      $query->bindValue(':ape_materno',  $catedratico->apeMaterno);
      $query->bindValue(':dni', $catedratico->dni);
      $query->bindValue(':celular',  $catedratico->celular);
      $query->bindValue(':correo',  $catedratico->correo);
      $query->bindValue(':carrera',  $catedratico->carrera);
      $query->bindValue(':modalidad',  $catedratico->modalidad);

      $hashedPassword = password_hash( $catedratico->password, PASSWORD_DEFAULT);
      $query->bindValue(':password', $hashedPassword);

      return $query->execute();
    } catch (PDOException $e) {
      echo "Error al insertar el usuario: " . $e->getMessage();
      exit;
    }
  }

  public function verificarUsuario($dni, $password)
  {
    try {
      $con = Conexion::getConexion();

      $sql = "SELECT password FROM usuario WHERE dni = :dni";
      $query = $con->prepare($sql);
      $query->bindValue(':dni', $dni);

      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        return password_verify($password, $result['password']);
      } else {
        return false;
      }
    } catch (PDOException $e) {
      echo "Error al verificar al docente " . $e->getMessage();
      exit;
    }
  }
}
