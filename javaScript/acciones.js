$(document).ready(function () {
    EnrutarServicios();
});

function EnrutarServicios(){
    let servicio;
    $("div .Servicios").on('click', function (event) {
         servicio=$(this).attr('Servicio');
        
         if(servicio == "Astillero"){
            window.location.href = "index.php?operacion=Astillero";
         }else if(servicio=="Mecanica" ){
            window.location.href = "index.php?operacion=Mecanica";
         }
    });

}