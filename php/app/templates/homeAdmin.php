<?php ob_start() ?>
<div class="container mt-5 text-center">
    <h2>Bienvenido al apartado Administrador </h2>
    <h4>Las operaciones que puedes realizar son:</h4>

    <div class="d-flex justify-content-between mt-4 bg-warning" id="mensaje">
    <p>   </p>    
    <p>Muy buenas querido administrador le avisamos de que toda operacion realizada se hace con una base de datos.<br>Tenga mucho cuidado con las operaciones ya que puede añadir,modificar y eliminar datos. </p>
        <i class="far fa-times-circle mt-2" id="Cerrar"></i>
    </div>
    <div class="d-flex justify-content-around mt-5">
        <div>
            <h5>Operaciones Astillero</h5>
            <div class="mt-5 listado">
                <ul>
                    <li><a href="index.php?operacion=VProducto">Ver productos</a></li>
                    <li><a href="index.php?operacion=CProducto">Crear producto</a></li>
                    <li><a href="index.php?operacion=MProducto">Modificar producto</a></li>
                    <li><a href="index.php?operacion=EProducto">Eliminar producto</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h5>Operaciones Mecanica</h5>
            <div class="mt-5 listado">
                <ul>
                    <li><a href="index.php?operacion=VServicios">Ver servicios</a></li>
                    <li><a href="index.php?operacion=CServicios">Crear servicios</a></li>
                    <li><a href="index.php?operacion=MServicios">Modificar servicios</a></li>
                    <li><a href="index.php?operacion=EServicios">Eliminar servicios</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h5>Operaciones Actualidad</h5>
            <div class="mt-5 listado">
                <ul>

                    <li><a href="index.php?operacion=VNoticia">Ver noticias</a></li>
                    <li><a href="index.php?operacion=CNoticia">Crear noticia</a></li>
                    <li><a href="index.php?operacion=MNoticia">Modificar noticia</a></li>
                    <li><a href="index.php?operacion=ENoticia">Eliminar noticia</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layoutAdmin.php'; ?>