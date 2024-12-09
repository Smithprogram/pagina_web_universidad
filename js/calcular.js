function calcular() {
    let opUniversidad = document.getElementById("chkUniversidad").checked; // Checkbox para universidad

    let costoMatricula = 0;
    if (opUniversidad) {
        costoMatricula = 670; // Costo de matrícula por 21 créditos
    }

    let turnos = document.getElementsByName("rdTurnos");
    let turno;
    for (let i = 0; i < turnos.length; i++) {
        if (turnos[i].checked) {
            turno = turnos[i].value;
            break;
        }
    }

    let costoPension = 0;
    switch (turno) {
        case "rdTurnoManana":
            costoPension = 0.05 * costoMatricula; // 5% de descuento
            break;
        case "rdTurnoTarde":
            costoPension = 0.10 * costoMatricula; // 10% de descuento
            break;
    }

    // Calcular el costo total
    let costoTotal = costoMatricula - costoPension;

    // Mostrar los resultados
    document.getElementById("divRespuesta").innerHTML = 
        "Costo matrícula: " + costoMatricula + 
        "<br>  <br> Costo pensión (descuento aplicado): " + costoPension + 
        "<br> <br> Costo total: " + costoTotal;
}

window.onload = function() {
    document.getElementById("btnCalcular").onclick = calcular;
}
