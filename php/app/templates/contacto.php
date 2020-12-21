<?php ob_start() ?>

<div class="VideoContacto">
   <div>
      <video autoplay muted loop>
         <source src="/Blanchadell/imagenes/videos/contacto.mp4" type="video/mp4">
      </video>
   </div>
</div>
<div class="container">
    
    <h2 class="text-primary mt-5">CENTRO DE ATENCIÓN AL CLIENTE BLANCHADELL</h2>
    
            <hr class=" lineaSeparadoraAzul">
        
    
    <div class="row mt-5">
        <div class="col">
            <h4>Te invitamos a que compartas tus dudas, comentarios, consultas e inquietudes con talleres Blanchadell</h4>
            <p class="mt-4">Queremos que sientas que recibes el mejor servicio de atención al cliente posible y trabajamos día a día para que así sea. Si tienes cualquier duda sobre nuestros productos o servicios, ¡no dudes en preguntarnos!</p>
        </div>
    </div>
    <div class=" row mt-3">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <h4>HORARIO SEMANAL</h4>
        </div>
        <div class="col-4"></div>
    </div>
    <div class=" row">
        <div class="col-12">
            <table class="table table-sm table-primary">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Lunes</th>
                        <th scope="col"> - </th>
                        <th scope="col">Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mañanas</td>
                        <td>08:00h</td>
                        <td> - </td>
                        <td>13:00h</td>
                    </tr>
                    <tr>
                        <td>Tardes</td>
                        <td>15:00h</td>
                        <td> - </td>
                        <td>18:00h</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <di class="col-1"></di>
        <div class="col-5">
            <h4 class=" btn btn-primary btn-lg btn-block"><i class="fas fa-phone-square-alt"></i> 964 40 28 51</h4>
        </div>
        <div class="col-1"></div>
        <div class="col-5" id="MostrarMaps">
            <h4 class=" btn btn-primary btn-lg btn-block"><i class="fas fa-mouse-pointer"></i>Talleres Blanchadell</h4>
        </div>
       
    </div>
    <div class="row text-left">
        <div class="col-1"></div>
        <div class="col-5">
            <p> Llama a nuestro Servicio de Atención al Cliente. </p>
        </div>
        <div class="col-1"></div>
        <div class="col-5">
            <p>Te mostramos la ubicación de nuestro taller. Clika encima de Talleres Blanchadell para mostrartelo</p>
        </div>
        <div class="row mt-4" id="taller">
        </div>
    </div>

    <div class="mt-5 row">
        <div class="col-1 "></div>
        <div class="col-9">
            <form class="needs-validation " id="Contactanos">
                <h4 class="text-center">Contacta traves de nuestro Formulario On-line</h4>
                <div class="form-row mt-5">
                    <div class="col-md-2 mb-2"></div>
                    <div class="col-md-5 mb-2">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="Nombre" pattern="[A-Za-z]{3,50}$" title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-5 mb-2">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="Apellidos" pattern="[A-Za-z]{3,50}$" title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-2"></div>
                    <div class="col-md-5 mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" pattern="^[6][0-9]{8}$" title="Empieza por 6 seguido de 8 numeros" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-5 mb-2">
                        <label for="Email">Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="email" class="form-control" name="email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Tu E-Mail correcto" tabindex="2" required>
                            <div class=" valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-2"></div>
                    <div class="col-md-5 mb-2">
                        <label>Escriba la duda que tenga:</label>
                        <textarea name="texto" rows="6" cols="90" id="texto"></textarea>
                    </div>
                    <div class="col-md-5 mb-2"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-2"></div>
                    <div class="col-md-5 mb-2">
                        <input class="btn btn-primary mt-2" type="submit" name="duda" value="Enviar">
                    </div>
                    <div class="col-md-5 mb-2"></div>

                </div>
            </form>
            <div id="textError" class="mt-5">
                <?php if (isset($errores)) {
                    echo "<p> $errores </p>";
                } ?>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php'; ?>