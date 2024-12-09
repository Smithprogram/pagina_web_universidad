<!DOCTYPE html>
<html lang="en">

<body>
    <?php require_once('head.php'); ?>

    <body>

        <?php
        require_once('header.php');
        require_once('nav.php');
        ?>

        </div>
        <form action="./Modelo/ControladorUsuario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required minlength="5" maxlength="20" autocomplete="off">
            <br>

            <label for="ApellidoPaterno">Apellido Paterno:</label>
            <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" required minlength="5" maxlength="20" autocomplete="off">
            <br>

            <label for="ApellidoMaterno">Apellido Materno:</label>
            <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" required minlength="5" maxlength="20" autocomplete="off">
            <br>

            <label for="dni">DNI:</label>
            <input type="text" name="dni" required minlength="8" maxlength="8">    
            <br>

            <label for="celular">Celular:</label>
            <input type="celular" name="celular" id="celular" required required minlength="9" maxlength="9">
            <br>

            <label for="email">Correo Electronico:</label>
            <input type="email" name="email" id="email" required>
            <br>

            <label> Carrera:
                <input list="lista1" name="carrera"></label>
            <datalist id="lista1">
                <option value="Ingenieria mecanica"></option>
                <option value="ingenieria Industrial"></option>
                <option value="ingenieria ambiental"></option>
                <option value="derecho"></option>
                <option value="criminologia"></option>
                <option value="ingenieria sanitaria"></option>
                <option value="ingenieria sistemas"></option>
                <option value="administracion de empresas"></option>
                <option value="contabilidad"></option>
                <option value="Arquitectura"></option>
                <option value="Diseño Urbano"></option>
                <option value="Medicina General"></option>
                <option value="Enfermeria"></option>
                <option value="Odontologia"></option>
                <option value="Psicologia"></option>
                <option value="Literatura"></option>
                <option value="Historia"></option>
                <option value=" filosofia"></option>
                <option value="Ciencia"></option>
                <option value="Gestion de Turismo "></option>
                <option value="Gestion Hotelera"></option>



            </datalist>
            <br>
            <label> Modalidad:
                <input list="lista2" name="modalidad"></label>
            <datalist id="lista2">
                <option value="Presencial "></option>
                <option value="Semi presencial"></option>
                <option value="Virtual "></option>
               
            </datalist>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
            <br>

            <button name="boton" id="boton">Registrar</button>

        </form>
        <hr>

    </body>

</html>