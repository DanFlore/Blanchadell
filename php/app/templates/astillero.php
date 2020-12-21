<?php ob_start() ?>
<div>
    <div>
        <video id="VideoAutoPlay" class="w-100 h-25" autoplay>
            <source src="/Blanchadell/imagenes/videos/IMG_3931.mp4" type="video/mp4">
        </video>
    </div>
</div>
<div class="container text-center" id="CatalogoAstillero">
    <h4>Nuestro Catalogo</h4>
    <div class="mt-5 row ">

        <div class="col-3 bg-danger" tipo="Pesca">Pesca</div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Aquicultura">Aquicultura</div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Pasage">Pasage</div>
        <div class="col-1"></div>

    </div>
    <div class="row mt-5">
        <div class="col-3 bg-danger" tipo="Servicios">Servicios Maritimos</div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Recreo">Recreo </div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Vigilancia">Vigilancia</div>
        <div class="col-1"></div>

    </div>
</div>
<div class="container text-start mt-3">
    <p>Mas de 20 años contruyendo barcos, tu astillero de confianza </p>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layout.php'; ?>