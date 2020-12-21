$(document).ready(function(){
    if($("#InicioSesion")[0]){
        ValidarCampos();
    }
});
function ValidarCampos(){
    $("#InicioSesion").bind("submit",function(event){
        event.preventDefault();
        $("#Error").remove();
        let usuario=$("#usuario").val();
        let pass=$("#pass1").val();

        let ValidarUsuario=/^[a-z0-9_]{10,15}$/i;
        let ValidarPass=/^[a-z0-9_]{15}$/i;
    
        if(usuario!=""){
            if(!ValidarUsuario.test(usuario)){
                ErrorValidacion("usuario","una longitud de 10 a 15 caractares alfabeticos y numericos ");
            }else{
                if(pass!=""){
                if(!ValidarPass.test(pass)){
                    ErrorValidacion("password","una longitud de 15 caractares alfabeticos y numericos ");
                }else{
                    $.ajax({
                        url:"../php/index.php",type:"POST",data:{operacion:"FormIniciarSesion",usuario:usuario,pass:pass,remember:false},success:function($resultado){
                            mensaje($resultado);
                        }
                    });
                }
            }else{
                campoVacio("pass");
            }
        }
        }else{
            campoVacio("usuario");
        }
    });
}

function mensaje(MensajeServidor){
    if(Number(MensajeServidor)==1){
        window.location.href="index.php?operacion=homeAdmin";
    }else{
        $("#textError").append(`<p id='Error'>${MensajeServidor}</p>`);
        $("#Error").css("color", "red");
    }
}

