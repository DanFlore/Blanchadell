$(document).ready(function () {
    ValidarFormCreat();
    EliminarProducto();
});

function ValidarFormCreat() {

    $("#formulario").bind("submit", function (event) {
        event.preventDefault();
        $("#Error").remove();
        let nombre = $("#Nombre").val();
        let tipo = $("#tipo").val();
        let servicio = $("#servicio").val();
        let grupo = $("#grupo").val();
        let casco = $("#casco").val();
        let esloraToral = $("#esloraToral").val();
        let esloraPP = $("#esloraPP").val();
        let manga = $("#manga").val();
        let puntal = $("#puntal").val();
        let TonelajeTRB = $("#TonelajeTRB").val();
        let TonelajeGT = $("#TonelajeGT").val();
        let calado = $("#calado").val();
        let PesoRosca = $("#PesoRosca").val();
        let Desplazamiento = $("#Desplazamiento").val();
        let CargaMaxCubierta = $("#CargaMaxCubierta").val();
        let DesplazamientoCarga = $("#DesplazamientoCarga").val();
        let PotenciaPropulsora = $("#PotenciaPropulsora").val();
        let PotenciaAuxiliar = $("#PotenciaAuxiliar").val();
        let VelocidadSinVelocidad = $("#VelocidadSinVelocidad").val();
        let Combustible = $("#Combustible").val();
        let Tripulacion = $("#Tripulación").val();
        let AguaPotable = $("#AguaPotable").val();
        let AguaNegra = $("#AguaNegra").val();
        let AguaOleosas = $("#AguaOleosas").val();
        let Grua = $("#Grua").val();
        let Cabrestante = $("#Cabrestante").val();
        let Generador = $("#Generador").val();
        let Link1 = $("#Link1").val();
        let Link2 = $("#Link2").val();
        let Link3 = $("#Link3").val();
        let texto = $("#textoArea").val();
        let data;

        let ValidarTexto = /^[a-z]{3,50}$/i;
        let ValidarVarchar = /^[a-z0-9,./]{3,50}$/i;
        let ValidarNumerico = /^[0-9,.]{1,10}$/i;

        if (nombre != "") {
            if (!ValidarTexto.test(nombre)) {
                ErrorValidacion("Nombre", "una longitud de 3 a 50 caracteres de la a-z");
            } else {
                if (tipo != "") {
                    if (!ValidarTexto.test(tipo)) {
                        ErrorValidacion("Tipo", "una longitud de 3 a 50 caracteres de la a-z")
                    } else {
                        if (servicio != "") {
                            if (!ValidarTexto.test(servicio)) {
                                ErrorValidacion("Servicio", "una longitud de 3 a 50 caracteres de la a-z");
                            } else {
                                if (grupo != "") {
                                    if (!ValidarTexto.test(grupo)) {
                                        ErrorValidacion("Grupo", "una longitud de 3 a 50 caracteres de la a-z");
                                    } else {
                                        if (casco != "") {
                                            if (!ValidarVarchar.test(casco)) {
                                                ErrorValidacion("Casco", "una longitud de 3 a 50 caracteres de la a-z y . , /");
                                            } else {
                                                if (esloraToral != "") {
                                                    if (!ValidarNumerico.test(esloraToral)) {
                                                        ErrorValidacion("Eslora toral", "una longitud de 1 a 10 numeros con , y .");
                                                    } else {
                                                        if (esloraPP != "") {
                                                            if (!ValidarNumerico.test(esloraPP)) {
                                                                ErrorValidacion("Eslora toral", "una longitud de 1 a 10 numeros con , y .");
                                                            } else {
                                                                if (manga != "") {
                                                                    if (!ValidarNumerico.test(manga)) {
                                                                        ErrorValidacion("Manga", "una longitud de 1 a 10 numeros con , y .");
                                                                    } else {
                                                                        if (puntal != "") {
                                                                            if (!ValidarNumerico.test(puntal)) {
                                                                                ErrorValidacion("Puntal", "una longitud de 1 a 10 numeros con , y .");
                                                                            } else {
                                                                                if (TonelajeTRB != "") {
                                                                                    if (!ValidarNumerico.test(TonelajeTRB)) {
                                                                                        ErrorValidacion("Tonelaje TRB", "una longitud de 1 a 10 numeros con , y .");
                                                                                    } else {
                                                                                        if (TonelajeGT != "") {
                                                                                            if (!ValidarNumerico.test(TonelajeGT)) {
                                                                                                ErrorValidacion("Tonelaje GT", "una longitud de 1 a 10 numeros con , y .");
                                                                                            } else {
                                                                                                if (calado != "") {
                                                                                                    if (!ValidarNumerico.test(calado)) {
                                                                                                        ErrorValidacion("Calado", "una longitud de 1 a 10 numeros con , y .");
                                                                                                    } else {
                                                                                                        if (PesoRosca != "") {
                                                                                                            if (!ValidarNumerico.test(PesoRosca)) {
                                                                                                                ErrorValidacion("Peso Rosca", "una longitud de 1 a 10 numeros con , y .");
                                                                                                            } else {
                                                                                                                if (Desplazamiento != "") {
                                                                                                                    if (!ValidarNumerico.test(Desplazamiento)) {
                                                                                                                        ErrorValidacion("Desplazamiento", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                    } else {
                                                                                                                        if (CargaMaxCubierta != "") {
                                                                                                                            if (!ValidarNumerico.test(CargaMaxCubierta)) {
                                                                                                                                ErrorValidacion("Carga maxima cubierta", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                            } else {
                                                                                                                                if (DesplazamientoCarga != "") {
                                                                                                                                    if (!ValidarNumerico.test(DesplazamientoCarga)) {
                                                                                                                                        ErrorValidacion("Desplazamiento carga", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                    } else {
                                                                                                                                        if (PotenciaPropulsora != "") {
                                                                                                                                            if (!ValidarNumerico.test(PotenciaPropulsora)) {
                                                                                                                                                ErrorValidacion("Potencia propulsora", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                            } else {
                                                                                                                                                if (PotenciaAuxiliar != "") {
                                                                                                                                                    if (!ValidarNumerico.test(PotenciaAuxiliar)) {
                                                                                                                                                        ErrorValidacion("Potencia auxiliar", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                    } else {
                                                                                                                                                        if (VelocidadSinVelocidad != "") {
                                                                                                                                                            if (!ValidarNumerico.test(VelocidadSinVelocidad)) {
                                                                                                                                                                ErrorValidacion("Velocidad sin carga", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                            } else {
                                                                                                                                                                if (Combustible != "") {
                                                                                                                                                                    if (!ValidarNumerico.test(Combustible)) {
                                                                                                                                                                        ErrorValidacion("Combustible", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                    } else {
                                                                                                                                                                        if (Tripulación != "") {
                                                                                                                                                                            if (!ValidarNumerico.test(Tripulacion)) {
                                                                                                                                                                                ErrorValidacion("Tripulacion", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                            } else {
                                                                                                                                                                                if (AguaPotable != "") {
                                                                                                                                                                                    if (!ValidarNumerico.test(AguaPotable)) {
                                                                                                                                                                                        ErrorValidacion("Agua potable", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                                    } else {
                                                                                                                                                                                        if (AguaNegra != "") {
                                                                                                                                                                                            if (!ValidarNumerico.test(AguaNegra)) {
                                                                                                                                                                                                ErrorValidacion("Agua negra", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                                            } else {
                                                                                                                                                                                                if (AguaOleosas != "") {
                                                                                                                                                                                                    if (!ValidarNumerico.test(AguaOleosas)) {
                                                                                                                                                                                                        ErrorValidacion("Agua oleosas", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        if (Grua != "") {
                                                                                                                                                                                                            if (!ValidarNumerico.test(Grua)) {
                                                                                                                                                                                                                ErrorValidacion("Grua", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                if (Cabrestante != "") {
                                                                                                                                                                                                                    if (!ValidarNumerico.test(Cabrestante)) {
                                                                                                                                                                                                                        ErrorValidacion("Cabrestante", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        if (Generador != "") {
                                                                                                                                                                                                                            if (!ValidarNumerico.test(Generador)) {
                                                                                                                                                                                                                                ErrorValidacion("Generador", "una longitud de 1 a 10 numeros con , y .");
                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                if (texto != "") {
                                                                                                                                                                                                                                    if (idFiles1 != "") {
                                                                                                                                                                                                                                        if (idFiles2 != "") {
                                                                                                                                                                                                                                            if (idFiles3 != "") {
                                                                                                                                                                                                                                                if (Link1 != "") {
                                                                                                                                                                                                                                                    if (Link2 != "") {
                                                                                                                                                                                                                                                        if (Link3 != "") {
                                                                                                                                                                                                                                                            data = getFiles(`idFiles1`);
                                                                                                                                                                                                                                                            data = getFormData("formulario", data);
                                                                                                                                                                                                                                                            $.ajax({
                                                                                                                                                                                                                                                                url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img1) {
                                                                                                                                                                                                                                                                    if (!img1) {
                                                                                                                                                                                                                                                                        $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                                                                                                                        $("#Error").css("color", "red");
                                                                                                                                                                                                                                                                    } else {

                                                                                                                                                                                                                                                                        data = getFiles(`idFiles2`);
                                                                                                                                                                                                                                                                        data = getFormData("formulario", data);
                                                                                                                                                                                                                                                                        $.ajax({
                                                                                                                                                                                                                                                                            url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img2) {
                                                                                                                                                                                                                                                                                if (!img2) {
                                                                                                                                                                                                                                                                                    $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                                                                                                                                    $("#Error").css("color", "red");
                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                    data = getFiles(`idFiles3`);
                                                                                                                                                                                                                                                                                    data = getFormData("formulario", data);
                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                        url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img3) {
                                                                                                                                                                                                                                                                                            if (!img3) {
                                                                                                                                                                                                                                                                                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                                                                                                                                                $("#Error").css("color", "red");
                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                let img4 = $("#idFiles4").val();
                                                                                                                                                                                                                                                                                                if (img4 != "") {
                                                                                                                                                                                                                                                                                                    data = getFiles(`idFiles4`);
                                                                                                                                                                                                                                                                                                    data = getFormData("formulario", data);
                                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                                        url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img4) {
                                                                                                                                                                                                                                                                                                            if (!img4) {
                                                                                                                                                                                                                                                                                                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                                                                                                                                                                $("#Error").css("color", "red");
                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                let img5 = $("#idFiles5").val();
                                                                                                                                                                                                                                                                                                                if (img5 != "") {
                                                                                                                                                                                                                                                                                                                    data = getFiles(`idFiles5`);
                                                                                                                                                                                                                                                                                                                    data = getFormData("formulario", data);
                                                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                                                        url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img5) {
                                                                                                                                                                                                                                                                                                                            if (!img5) {
                                                                                                                                                                                                                                                                                                                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                                                                                                                                                                                $("#Error").css("color", "red");
                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                let img6 = $("#idFiles6").val();
                                                                                                                                                                                                                                                                                                                                if (img6 != "") {
                                                                                                                                                                                                                                                                                                                                    data = getFiles(`idFiles6`);
                                                                                                                                                                                                                                                                                                                                    data = getFormData("formulario", data);
                                                                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                                                                        url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img6) {
                                                                                                                                                                                                                                                                                                                                            if (!img6) {
                                                                                                                                                                                                                                                                                                                                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                                                                                                                                                                                                $("#Error").css("color", "red");
                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                $.ajax({
                                                                                                                                                                                                                                                                                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicio: servicio, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, img6: img6, link1: Link1, link2: Link2, link3: Link3, texto: texto }, success: function ($respuesta) {
                                                                                                                                                                                                                                                                                                                                                        ResultadoBDD($respuesta);
                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                });
                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                    });
                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                                                                        url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicio: servicio, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, link1: Link1, link2: Link2, link3: Link3, texto: texto }, success: function ($respuesta) {
                                                                                                                                                                                                                                                                                                                                            ResultadoBDD($respuesta);
                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                    });
                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                    });
                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                                                        url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicio: servicio, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, link1: Link1, link2: Link2, link3: Link3, texto: texto }, success: function ($respuesta) {
                                                                                                                                                                                                                                                                                                                            ResultadoBDD($respuesta);
                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                    });
                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                    });
                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                    $.ajax({
                                                                                                                                                                                                                                                                                                        url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicio: servicio, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, link1: Link1, link2: Link2, link3: Link3, texto: texto }, success: function ($respuesta) {
                                                                                                                                                                                                                                                                                                            ResultadoBDD($respuesta);
                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                    });
                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                    });

                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                        });

                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                            });
                                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                                            campoVacio("Link 3");
                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                        campoVacio("Link 2");
                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                    campoVacio("Link 1");
                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                campoVacio("Imagen 3");
                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                            campoVacio("Imagen 2");
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                        campoVacio("Imagen 1");
                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                    campoVacio("Texto");
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                            campoVacio("Generador");
                                                                                                                                                                                                                        }
                                                                                                                                                                                                                    }

                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    campoVacio("Cabrestante");
                                                                                                                                                                                                                }
                                                                                                                                                                                                            }
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            campoVacio("Grua");
                                                                                                                                                                                                        }
                                                                                                                                                                                                    }
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    campoVacio("Agua oleosas");
                                                                                                                                                                                                }
                                                                                                                                                                                            }
                                                                                                                                                                                        } else {
                                                                                                                                                                                            campoVacio("Agua negra");
                                                                                                                                                                                        }
                                                                                                                                                                                    }
                                                                                                                                                                                } else {
                                                                                                                                                                                    campoVacio("Agua potable");
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                        } else {
                                                                                                                                                                            campoVacio("Tripulacion");
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                } else {
                                                                                                                                                                    campoVacio("Combustible");
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                        } else {
                                                                                                                                                            campoVacio("Velocidad sin carga");
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                } else {
                                                                                                                                                    campoVacio("Potencia auxiliar");
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        } else {
                                                                                                                                            campoVacio("Potencia propulsora");
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    campoVacio("Desplazamiento Carga")
                                                                                                                                }
                                                                                                                            }
                                                                                                                        } else {
                                                                                                                            campoVacio("Carga maxima cubierta");
                                                                                                                        }
                                                                                                                    }
                                                                                                                } else {
                                                                                                                    campoVacio("Desplazamiento");
                                                                                                                }
                                                                                                            }
                                                                                                        } else {
                                                                                                            campoVacio("Peso Rosca");
                                                                                                        }
                                                                                                    }
                                                                                                } else {
                                                                                                    campoVacio("Calado");
                                                                                                }
                                                                                            }
                                                                                        } else {
                                                                                            campoVacio("Tonelaje GT");
                                                                                        }
                                                                                    }
                                                                                } else {
                                                                                    campoVacio("Tonelaje TRB");
                                                                                }
                                                                            }
                                                                        } else {
                                                                            campoVacio("Puntal");
                                                                        }
                                                                    }
                                                                } else {
                                                                    campoVacio("Manga");
                                                                }
                                                            }
                                                        } else {
                                                            campoVacio("Eslora pp")
                                                        }
                                                    }
                                                } else {
                                                    campoVacio("Eslora toral");
                                                }
                                            }
                                        } else {
                                            campoVacio("Casco");
                                        }
                                    }
                                } else {
                                    campoVacio("Grupo");
                                }
                            }
                        } else {
                            campoVacio("Servicio")
                        }
                    }
                } else {
                    campoVacio("Tipo");
                }
            }
        } else {
            campoVacio("Nombre");
        }

    });



}

function ResultadoBDD($respuesta) {
    if ($respuesta == 0) {
        alert("Lo sentimos ya se encuentra el nombre en la base de datos, comprueba los datos ");
    } else if ($respuesta == 1) {
        alert("Fantastico ya se creo el Producto ");
       /*  location.reload(); */
    } else if ($respuesta == 2) {
        alert("Lo sentimos hubo un error con la subida a la base de datos, comprueba los datos y vuelve a probar, si el problema persigue contacta con un especialista");
    } else {
        $("#textError").append(`<p id='Error'>${$respuesta}</p>`);
    }
}

function EliminarProducto(){
    $(".EliminarP table tbody tr").bind("click",function(event){
        let nombre=$(this).attr("nombre");
        $.ajax({
            url:"../php/index.php",type:"POST",data:{operacion:'EliminarProducto',nombre:nombre},success:function($respuesta){
                alert($respuesta);
                location.reload();
            }
        })
    });
}