$(document).ready(function(){
    EliminarMensaje();
});

function campoVacio(campo) {
    $("#textError").append(`<p id='Error'>Lo sentimos el campo ${campo} esta vacio, se debe rellenar</p>`);
    $("#Error").css("color", "red");
}

function ErrorValidacion(campo,mensaje){
    $("#textError").append(`<p id='Error'>El campo ${campo} tiene que tener ${mensaje}</p>`);
}
function getFiles(id) {
    var idFiles = document.getElementById(id);
    var archivos = idFiles.files;
    var data = new FormData();
    for (var i = 0; i < archivos.length; i++) {
        data.append("archivo" + i, archivos[i]);
    }
    return data;

}
function getFormData(id, data) {
    $("#" + id).find("input,select").each(function (i, v) {
        if (v.type !== "file") {
            if (v.type === "checkbox" && v.checked === true) {
                data.append(v.name, "on");
            } else {
                data.append(v.name, v.value);
            }
        }
    });
    return data;
}

function EliminarMensaje(){

    $("#Cerrar").on("click",function(){
        $("#mensaje").remove();
    });
}