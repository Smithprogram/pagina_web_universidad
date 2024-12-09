<?php
require_once("Conexion.php");
require_once("Usuario.php");
require_once("UsuarioDAO.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario();
    $usuario->nombre = $_POST['nombre'];
    $usuario->apePaterno = $_POST['ApellidoPaterno'];
    $usuario->apeMaterno = $_POST['ApellidoMaterno'];
    $usuario->dni = $_POST['dni'];
    $usuario->celular = $_POST['celular'];
    $usuario->correo = $_POST['email'];
    $usuario->carrera = $_POST['carrera'];
    $usuario->password = $_POST['password'];
    $usuario->modalidad = $_POST['modalidad'];
    $usuarioDAO = new UsuarioDAO();
    $resultado = $usuarioDAO->insertar($usuario);

    if ($resultado) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error al registrar el usuario.";
    }
}
