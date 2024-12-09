<!DOCTYPE html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>

<?php
require_once('header.php');
require_once('nav.php');

// Variables para errores y valores iniciales
$nombreError = $claveError = $inicioSesionError = "";
$nombre = $clave = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datosValidos = true;

    if (empty($_POST["nombre"])) {
        $nombreError = "El nombre de usuario obligatorio.";
        $datosValidos = false;
    } else {
        $nombre = test_input($_POST["nombre"]);
    }

    if (empty($_POST["clave"])) {
        $claveError = "La contraseña  es obligatoria.";
        $datosValidos = false;
    } else {
        $clave = test_input($_POST["clave"]);
    }

    if ($datosValidos) {
        // Procesar datos
        echo "<p>Inicio de sesión exitoso</p>";
        exit;
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

    <main>
              <h2> Inicio de Sesión</h2>
    <p><span class="errorDatosFormulario">* Campos obligatorios</span></p>


    <p>Alumno</p>
    <p></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
        <div>
            <label for="nombre">Nombre de usuario: </label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" autocomplete="off" required>
            <span class="errorDatosFormulario"><?php echo $nombreError; ?></span>
        </div>

        <div>
            <label for="clave">Contraseña:</label>
            <input class="form-control" type="password" name="clave" id="clave" autocomplete="off" required>
            <span class="errorDatosFormulario"><?php echo $claveError; ?></span>
        </div>

        <div>
            <span class="errorDatosFormulario"><?php echo $inicioSesionError; ?></span>
        </div>

        <button type="submit">Iniciar sesión</button>
        <h2>No tienes una cuenta </h2>
         <p> <a href="formularios.php">Registate aqui</a></p>
    </form>
</main>

<?php
require_once('aside.php');
require_once('footer.php');
?>

</body>
</html>
