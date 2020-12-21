$(document).ready(function () {
        MostrarMaps();
        ContactanosEmail();
});

function MostrarMaps() {
    $("#MostrarMaps").bind("click", function () {
        if ($("#CA")[0]) {
            $("#taller").empty();
        } else {
            $("#taller").html('<div class="col-12"><iframe id="CA" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.672350779161!2d0.46132013703923747!3d40.46601476974895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a04fe50595e1eb%3A0x6ff4897e29d34d77!2sTALLERES%20BLANCHADELL%20S.L.!5e0!3m2!1ses!2ses!4v1606341612643!5m2!1ses!2ses" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>');
        }
    });
}

function ContactanosEmail() {
    
    $("#Contactanos").bind("submit", function (event) {
        event.preventDefault();
        $("#Error").remove();
        let nombre = $("#Nombre").val();
        let apellidos = $("#Apellidos").val();
        let telefono = $("#telefono").val();
        let email = $("#Email").val();
        let texto = $("#texto").val();
        let ValidarTexto = /^[a-z]{3,100}$/i;
        let validarTelefono = /^[6][0-9]{8}$/;
        let ValidarEmail = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;


        if (nombre != "") {
            if (!ValidarTexto.test(nombre)) {
                ErrorValidacion("nombre", " una longitud de tres a cien letras de la A a la Z");
            } else {
                if (apellidos != "") {
                    if (!ValidarTexto.test(apellidos)) {
                        ErrorValidacion("apellidos", " una longitud de tres a cien letras de la A a la Z");
                    } else {
                        if (telefono != "") {
                            if (!validarTelefono.test(telefono)) {
                                ErrorValidacion("telefono", " el formato dd/mm/aaaa");
                            } else {
                                if (email != "") {
                                    if (!ValidarEmail.test(email)) {
                                        ErrorValidacion("email", ` ${email}el formato numeros,letras seguido de un @ seguido de texto un punto y texto`);
                                    } else {
                                        if (texto != "") {
                                             $.ajax({
                                                url: "../php/index.php", type: "POST", data: { operacion: "contactanos", nombre: nombre, apellidos: apellidos, telefono: telefono, email: email }, success: function ($respuesta) {
                                                    mensaje($respuesta);
                                                }
                                            }); 
                                        } else {
                                            campoVacio("texto");
                                        }
                                    }
                                } else {
                                    campoVacio("email");
                                }
                            }
                        } else {
                            campoVacio("telefono");
                        }
                    }
                } else {
                    campoVacio("apellidos");
                }
            }
        } else {
            campoVacio("nombre");
        }
    });

    function mensaje(MensajesServidor) {

        if (Number(MensajesServidor) == 0) {
            alert("En unos instantes nos pondremos en contacto con usted");
        } else {
            $("#textError").append(`<p id='Error'>${MensajesServidor}</p>`);
            $("#Error").css("color", "red");
        }
    }

   
}