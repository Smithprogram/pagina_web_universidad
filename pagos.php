<?php

    $apellidoPaterno = $_POST['ApellidoPaterno'] ?? '';
    $apellidoMaterno = $_POST['ApellidoMaterno'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $carrera = $_POST['carrera'] ?? '';
    $turno = $_POST['turno'] ?? '';
    $beca = $_POST['beca'] ?? '';
    $colegioP = isset($_POST['colegioP']);
    $colegioE = isset($_POST['colegioE']);

    
    $costoPension = 670;
    $descuento = 0;

    
    if ($turno === 'rdTurnoManana') {
        $descuento = 0.05; 
    } elseif ($turno === 'rdTurnoTarde') {
        $descuento = 0.07; 
    } elseif ($turno === 'rdTurnoNoche') {
        $descuento = 0.15; 
    }
 $descuentoBeca = 0;
switch ($beca) {
    case '1':
        $descuentoBeca = 0.00; 
        break;
    case '2':
        $descuentoBeca = 0.30; 
        break;
    case '3':
        $descuentoBeca = 0.10;
        break;
    case '4':
        $descuentoBeca = 0.05; 
    case '5':
        $descuentoBeca = 0.50; 
        break;
    case '6':
        $descuentoBeca = 0.40; 
        break;
}
    
    $costoFinalMensual = $costoPension * (1 - ($descuento+$descuentoBeca-($descuento*$descuentoBeca)));
$costoFinalCiclo=  $costoFinalMensual*5;
    
    echo "Hola $nombre $apellidoPaterno $apellidoMaterno,<br>";
    echo "Tu carrera es: $carrera<br>";
    echo "Tu monto de la pension mensual es: " . number_format($costoFinalMensual, 2) . " Soles<br>";
    echo "Tu monto de la pension del ciclo es: " . number_format($costoFinalCiclo, 2) . " Soles";
?>