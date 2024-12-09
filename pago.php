<!DOCTYPE html>
<html lang="es">
<?php require_once('head.php'); ?>
<body>

<?php
    require_once('header.php');
    require_once('nav.php');
?>

    
    <script>
        function showResult() {
            // Obtener los valores de los campos del formulario
            var apellidoPaterno = document.getElementById("ApellidoPaterno").value;
            var apellidoMaterno = document.getElementById("ApellidoMaterno").value;
            var nombre = document.getElementById("nombre").value;
            var carrera = document.querySelector("input[list='lista']").value;
            var turno = document.querySelector("input[name='rdTurnos']:checked").value;
            var beca = document.getElementById("beca").value;
            var colegioP = document.getElementById("chkColegioP").checked;
            var colegioE = document.getElementById("chkColegioE").checked;

            // Crear un objeto FormData para enviar los datos
            var formData = new FormData();
            formData.append("ApellidoPaterno", apellidoPaterno);
            formData.append("ApellidoMaterno", apellidoMaterno);
            formData.append("nombre", nombre);
            formData.append("carrera", carrera);
            formData.append("turno", turno);
            formData.append("beca", beca);
            formData.append("colegioP", colegioP);
            formData.append("colegioE", colegioE);

            // Crear la solicitud AJAX
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "pagos.php", true);
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Resultado").innerHTML = this.responseText;
                }
            };
            xmlhttp.send(formData);
        }
    </script>

<body>
  
    <label for="ApellidoPaterno">Apellido Paterno:</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" required minlength="5" maxlength="20" autocomplete="off">
    <br><br>
    
    <label for="ApellidoMaterno">Apellido Materno:</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" required minlength="5" maxlength="20" autocomplete="off">
    <br><br>
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required minlength="5" maxlength="20" autocomplete="off">
    <br><br>
    
    <label> Carrera:
        <input list="lista" name="lista">
    </label>
    <datalist id="lista">
        <option value="Medicina General"></option>
        <option value="Enfermeria"></option>
        <option value="Odontologia"></option>
        <option value="Ingeneria de sistemas"></option>
        <option value="ingenieria Civil"></option>
        <option value="ingenieria Industrial"></option>
        <option value="Arquitectura"></option>
        <option value="Diseño Urbano"></option>
        <option value="Psicología Clinica"></option>
        <option value="Psicología Organizacional"></option>
        <option value="Derecho"></option>
        <option value="Criminología"></option>
        <option value="Economia"></option>
        <option value="Finanzas"></option>
        <option value="Biología"></option>
        <option value="Química"></option>
        <option value="Fisica"></option>
        <option value="Literatura"></option>
        <option value="Historia"></option>
        <option value="Filosofía"></option>
        <option value="Artes Visuales"></option>
        <option value="Musica"></option>
        <option value="Teatro"></option>
        <option value="Cienca de Datos"></option>
        <option value="Inteligencia Artificial"></option>
        <option value="Ciberseguridad"></option>
        <option value="Educación Inicial"></option>
        <option value="Educación Primaria"></option>
        <option value="Educacion Secundaria"></option>
        <option value="Gestión de Turismo"></option>
        <option value="Gestion de Hoteleria"></option>
    </datalist>
    <br>
    
    <h4>Procedencia de Colegio:</h4>
    <input name="chkColegioP" id="chkColegioP" type="checkbox"> Colegio Particular
    <input name="chkColegioE" id="chkColegioE" type="checkbox"> Colegio Estatal
  
    <h4>Selecciona turno a matricular:</h4>
    <input type="radio" name="rdTurnos" id="rdTurnoManana" value="rdTurnoManana" checked>Turno mañana 5%
    <br>
    <input type="radio" name="rdTurnos" id="rdTurnoTarde" value="rdTurnoTarde">Turno tarde 7%           
    <br>
    <input type="radio" name="rdTurnos" id="rdTurnoNoche" value="rdTurnoNoche">Turno noche 15%           
    <br>
    
    <h4> Becas:</h4>
    <select id="beca" name="beca" required>
        <option value="1">Ninguno</option>
        <option value="2">Academica</option>
        <option value="3">Deportiva</option>
        <option value="4">Ciencia y Tecnología</option>
        <option value="5">Internacional</option>
        <option value="6">Inclusión</option>
    </select>
    <br><br>
    
    <button type="button" onclick="showResult()">Calcular</button>
    <div id="Resultado"></div>
</body>
</html>