<!doctype html>
<html lang="en">
    <?php require_once('head.php'); ?>
    <body>
    
    <?php
        require_once('header.php');
        require_once('nav.php');
    ?>
    
<body>





<main>
    <h4>Selecciona tu opción para matrícula:</h4>
    <input name="chkUniversidad" id="chkUniversidad" type="checkbox" />Universidad
  
    <h4>Selecciona turno a matricular:</h4>
    <input type="radio" name="rdTurnos" id="rdTurnoManana" value="rdTurnoManana" checked>Turno mañana 70%
    <br>
    <input type="radio" name="rdTurnos" id="rdTurnoTarde" value="rdTurnoTarde">Turno tarde 60%           
    <br><br>
    <button type="button" name="btnCalcular" id="btnCalcular">Calcular</button>
    
    <br><br>
    <div id="divRespuesta"></div>
</main>




<script src="js/calcular.js"></script>

</body>
</html>
