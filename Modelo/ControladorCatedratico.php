<?php
require_once("Conexion.php");
require_once("Usuario.php");
require_once("CatedraticoDAO.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $catedratico = new Usuario();
    $catedratico->nombre = $_POST['nombre'];
    $catedratico->apePaterno = $_POST['ApellidoPaterno'];
    $catedratico->apeMaterno = $_POST['ApellidoMaterno'];
    $catedratico->dni = $_POST['dni'];
    $catedratico->celular = $_POST['celular'];
    $catedratico->correo = $_POST['email'];
    $catedratico->carrera = $_POST['carrera'];
    $catedratico->password = $_POST['password'];
    $catedratico->modalidad = $_POST['modalidad'];
    $catedraticoDAO = new CatedraticoDAO();
    $resultado = $usuarioDAO->insertar($catedratico);

    if ($resultado) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error al registrar el usuario.";
    }
}
