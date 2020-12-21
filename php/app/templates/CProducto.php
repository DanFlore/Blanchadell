<?php ob_start() ?>
<div class="d-flex justify-content-between mt-4 bg-warning" id="mensaje">
<p>  </p>
<p>Tenga cuidado al insertar los datos. <br> Todo dato insertado se mostrara en la página web. <br><strong class="text-danger">La primera imagen insertada sera la que se mostrara para hacer referencia al producto</strong></p>
<i class="far fa-times-circle mt-2" id="Cerrar"></i>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="justify-content-center" id="fr">
            <form class="needs-validation text-primary" id="formulario" enctype="multipart/form-data">
                <div class="form-row ">
                    <div class="col-md-4 mb-2">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="Nombre" pattern="^[A-Za-z]{3,50}$" title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="tipo">Tipo</label><br>
                        <select class="form-control" name="tipo" id="tipo" style="height: 55px;">
                            <option value=''> </option>
                            <option value='pesca'>Pesca</option>
                            <option value='pasage'>Pasage</option>
                            <option value='aguicultura'>Aquicultura</option>
                            <option value='serviciosMaritimos'>Servicios maritimos</option>
                            <option value='recreo'>Recreo</option>
                            <option value='Vigilancia'>Vigilancia/Militares</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="servicio">Servicio</label>
                        <input type="text" class="form-control" name="servicio" id="servicio" pattern="^[A-Za-z]{3,50}$" title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="grupo">Grupo/clase</label>
                        <input type="text" class="form-control" name="grupo" id="grupo" pattern="^[0-9A-Za-z/]{3,8}$" title="Tine que ser parecido a:( 3/s ) " tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="casco">Casco</label>
                        <input type="text" class="form-control" name="casco" id="casco" pattern="^[0-9a-zA-Z,]{1,50}$" title="Solo caracteres de 1 a 50 " tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="esloraToral">Eslora toral,m</label>
                        <input type="text" class="form-control" name="esloraToral" id="esloraToral" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="esloraPP">Eslora entre PP, m</label>
                        <input type="text" class="form-control" name="esloraPP" id="esloraPP" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="manga">Manga ff, m</label>
                        <input type="text" class="form-control" name="manga" id="manga" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="puntal">Puntal de construcción, m</label>
                        <input type="text" class="form-control" name="puntal" id="puntal" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="TonelajeTRB">Tonelaje TRB</label>
                        <input type="text" class="form-control" name="TonelajeTRB" id="TonelajeTRB" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="TonelajeGT">Tonelaje GT</label>
                        <input type="text" class="form-control" name="TonelajeGT" id="TonelajeGT" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="calado">Calado máx con carga, m</label>
                        <input type="text" class="form-control" name="calado" id="calado" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="PesoRosca">Peso en rosca, T</label>
                        <input type="text" class="form-control" name="PesoRosca" id="PesoRosca" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Desplazamiento">Desplazamiento trabajo, T</label>
                        <input type="text" class="form-control" name="Desplazamiento" id="Desplazamiento" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="CargaMaxCubierta">Carga máxima en cubierta,T</label>
                        <input type="text" class="form-control" name="CargaMaxCubierta" id="CargaMaxCubierta" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="DesplazamientoCarga">Desplazamiento max carga</label>
                        <input type="text" class="form-control" name="DesplazamientoCarga" id="DesplazamientoCarga" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="PotenciaPropulsora">Potencia propulsora, Cv/Kw</label>
                        <input type="text" class="form-control" name="PotenciaPropulsora" id="PotenciaPropulsora" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="PotenciaAuxiliar">Potencia auxiliar, Cv/Kw</label>
                        <input type="text" class="form-control" name="PotenciaAuxiliar" id="PotenciaAuxiliar" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="VelocidadSinVelocidad">Velocidad sin carga, Nds</label>
                        <input type="text" class="form-control" name="VelocidadSinVelocidad" id="VelocidadSinVelocidad" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Combustible">Combustible, L</label>
                        <input type="text" class="form-control" name="Combustible" id="Combustible" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Tripulación">Tripulación</label>
                        <input type="text" class="form-control" name="Tripulación" id="Tripulación" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="AguaPotable">Agua potable, L</label>
                        <input type="text" class="form-control" name="AguaPotable" id="AguaPotable" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="AguaNegra">Aguas negras, L</label>
                        <input type="text" class="form-control" name="AguaNegra" id="AguaNegra" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="AguaOleosas">Aguas oleosas, L</label>
                        <input type="text" class="form-control" name="AguaOleosas" id="AguaOleosas" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="Grua">Grua, KN.m</label>
                        <input type="text" class="form-control" name="Grua" id="Grua" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Cabrestante">Cabrestante, T</label>
                        <input type="text" class="form-control" name="Cabrestante" id="Cabrestante" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Generador">Generador, Kw</label>
                        <input type="text" class="form-control" name="Generador" id="Generador" pattern="^[0-9,.]{1,10}$" title="Solo numeros de 1 a 10 de longitud" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="idFiles1">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles1" name="file1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles2">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles2" name="file2" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles3">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles3" name="file3" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="idFiles4">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles4" name="file4">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles5">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles5" name="file5">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles6">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles6" name="file6">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div> 
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="Link1">Link1</label>
                        <input type="url" class="form-control" name="Link1" id="Link1" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Link2">Link2</label>
                        <input type="url" class="form-control" name="Link2" id="Link2" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Link3">Link3</label>
                        <input type="url" class="form-control" name="Link3" id="Link3" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <label for="id">Escriba la duda que tenga:</label>
                        <textarea name="texto" rows="6" cols="90" id="textoArea"></textarea>
                </div>
        </div>
        <div>
            <div>
                <input class="btn btn-success btn-lg " type="submit" name="crear" value="Crear" id="formAlt">
            </div>
        </div>

        </form>
        <div id="textError" class="mt-5">
            <?php if (isset($errores)) {
                echo "<p> $errores </p>";
            } ?>
        </div>
    </div>
</div>


<?php $contenido = ob_get_clean(); ?>
<?php include 'OpAstillero.php'; ?>