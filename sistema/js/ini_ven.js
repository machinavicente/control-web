function calcularPeriodo() {
    var fechaInicio = new Date(document.getElementById("fechaInicio").value);
    var fechaFin = new Date(document.getElementById("fechaFin").value);

    var mesInicio = fechaInicio.getMonth();
    var anioInicio = fechaInicio.getFullYear();

    var mesFin = fechaFin.getMonth();
    var anioFin = fechaFin.getFullYear();

    var mesesDiferencia = (anioFin - anioInicio) * 12 + (mesFin - mesInicio);

    document.getElementById("periodo").value = mesesDiferencia;
}

document.getElementById("fechaInicio").addEventListener("change", calcularPeriodo);
document.getElementById("fechaFin").addEventListener("change", calcularPeriodo);