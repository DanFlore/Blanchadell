$(document).ready(function(){
    EnrutarAstillero();
});

function EnrutarAstillero() {
    let tipo;
    $("#CatalogoAstillero div div").on('click', function (event) {
        tipo = $(this).attr('tipo');
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'CatAstillero' , tipo: tipo}, success: function ($respuesta) {
                $("#contenido").html($respuesta);
            }
        });
    });
}    