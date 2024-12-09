<?php


class Conexion
{
  static public function getConexion()
  {
    try {

      
      $dsn = "mysql:host=localhost;dbname=universidad;port=3307";
      $usuario = "root";
      $clave = "12345678";

      $con = new PDO($dsn, $usuario, $clave);

      return $con;

    } catch (PDOException $e) {
      echo $e->getMessage("No puedo jefe");
    }
  }
}
?>

<?php
try {
  $conexion = Conexion::getConexion();
  echo "Conexión establecida correctamente.";
} catch (Exception $e) {
  echo $e->getMessage("Conexion no establecida");
}
?>
