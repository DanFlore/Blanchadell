<?php ob_start() ?>
<div class="row " >
    <div class="col-2"></div>
    <div class="col-8 ">
        <form class="needs-validation text-dark mt-5" id="InicioSesion">
            <h1 class="text-center">Inicio Sesion </h1>
            <div class="form-row mt-5">
                <div class="col-md-6 mb-2">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" pattern="[0-9A-za-z_]{10,15}?" title="El usuario tiene una longitud de 10 a 15 caracteres" tabindex="1" required value="<?php if (isset($usuario)) {
                                                                                                                                                                                                                                echo $usuario;                                                                                                                                                               } ?>">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="pass1">Contraseña</label>
                    <input type="password" class="form-control" name="pass" id="pass1" pattern="[A-Za-z0-9]{15}" title="La contraseña tiene una longitud de 15 caracteres" tabindex="3" required value="<?php if (isset($pass)) {
                                                                                                                                                                                                                            echo $pass;
                                                                                                                                                                                                                        } ?>">
                    <div class="invalid-tooltip">
                        Please provide a valid password.
                    </div>
                </div>
            </div>
            <div class="d-flex mt-5">
                <div class="col-6">
                    <input class="btn btn-danger" type="submit" name="iniciar" value="Entrar">
                </div>
            </div>
            <div id="textError" class="mt-5">
            <?php if(isset($errores)){ echo "<p> $errores </p>";} ?>
        </div>
        </form>
       
    </div>
    <div class="col-2"></div>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>