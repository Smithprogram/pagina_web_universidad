<!DOCTYPE html>
<html lang="en">
    <?php require_once('head.php'); ?>
    <body>
    
    <?php
        require_once('header.php');
        require_once('nav.php');
    ?>
    
    <h2>Requisitos de Admisión</h2>
    <p>Para ser admitido en nuestra universidad, debes cumplir con los siguientes requisitos:</p>
    <ul>
        <li> Certificado de secundaria o equivalente.
             <div class="image-container"><img src="ima/certificado de estudios.jpg" width="300" height="100" alt="Certificado">
            </div>
        </li>

        <li> Resultados de exámenes de admisión.
            <div class="image-container"><img src="ima/Entrevista1.jpg" width="300" height="100" alt="Resultados">
            </div>
        </li>
        <li>
            Entrevista personal.
            <div class="image-container">
                <img src="ima/entrevista.jpeg.jpg" width="300" height="100" alt="Entrevista">
            </div>
        </li>
        <li>
            Documentación de identidad.
            <div class="image-container">
                <img src="ima/dni.jpeg.jpg" width="300" height="100" alt="DNI">
            </div>
        </li>
    </ul>
    
    <h2>Contacto</h2>
    <p>Si tienes alguna pregunta o necesitas más información, por favor completa el siguiente formulario:</p>
    <form action="enviar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
        
    </body>
</html>