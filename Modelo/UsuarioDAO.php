<?php
require_once("Conexion.php");
require_once("Usuario.php");

class UsuarioDAO
{
  public function insertar(Usuario $usuario)
  {
    try {
      $con = Conexion::getConexion();

      $sql = "INSERT INTO usuario (nombre, ape_paterno, ape_materno, dni, celular, correo, carrera,modalidad,password)
                VALUES (:nombre, :ape_paterno, :ape_materno, :dni, :celular, :correo, :carrera,:modalidad,:password)";

      $query = $con->prepare($sql);

      $query->bindValue(':nombre', $usuario->nombre);
      $query->bindValue(':ape_paterno', $usuario->apePaterno);
      $query->bindValue(':ape_materno', $usuario->apeMaterno);
      $query->bindValue(':dni', $usuario->dni);
      $query->bindValue(':celular', $usuario->celular);
      $query->bindValue(':correo', $usuario->correo);
      $query->bindValue(':carrera', $usuario->carrera);
      $query->bindValue(':modalidad', $usuario->modalidad);

      $hashedPassword = password_hash($usuario->password, PASSWORD_DEFAULT);
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
      echo "Error al verificar el usuario: " . $e->getMessage();
      exit;
    }
  }
}
