<?php ob_start() ?>

<div class="Video">
   <div>
      <video autoplay muted loop>
         <source src="/Blanchadell/imagenes/videos/IMG_3931.mp4" type="video/mp4">
      </video>
   </div>
</div>
<hr class=" lineaSeparadoraAzul">

<div class="mt-3 container row">
   <div class="col-1"></div>
   <div class="col-5 hover Servicios" Servicio="Astillero">
      <figure>
         <img src="/Blanchadell/imagenes/barco/BarcoFondoDeVideo.jpg" alt="">
         <div class="capa">
            <h3>Astillero en aluminio</h3>
            <p>Conoce nuestro catalogo y nuestra forma de crear un barco, a que esparas??</p>
         </div>
      </figure>
   </div>
   <div class="col-1"></div>
   <div class="col-5 hover Servicios" Servicio="Mecanica">
      <figure>
         <img src="/Blanchadell/imagenes/barco/Mecanica.jpg" alt="">
         <div class="capa">
            <h3>Mecanica naval</h3>
            <p>Conoce nuestra mecanica naval, cualquier problema lo solucionamos</p>
         </div>
      </figure>
   </div>
</div>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php'; ?>