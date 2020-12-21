<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/Blanchadell/php/app/img/logo.jpg" type="image/jpg" />
    <link rel="stylesheet" href="/Blanchadell/interfaces/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href=" https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.css " rel=" stylesheet " />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <title>Blanchadell</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between">

            <div>
                <img src="/Blanchadell/php/app/img/logo_texto.jpg" alt="No se encuentra el logo" id="logo" style="height:70px;">
            </div>

            <div>
                <?php if (isset($_SESSION['usuario'])) { ?>
                    <div class="d-flex justify-content-end">

                        <div class=" ">
                            <ul class="navbar-nav mr-auto mt-2 my-lg-0 btn btn-dark ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo ucfirst($_SESSION['usuario']); ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-dark " aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item  text-light" href="index.php?operacion=SalirSesion" id="salir">Salir Sesion</a>
                                        <?php if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) { ?>
                                            <a class="dropdown-item  text-light" href="index.php?operacion=home" id="inicio">Pagina Usuarios</a>
                                        <?php } ?>
                                    </div>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark  justify-content-around" style="background-color: #2E76B8;">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button class="navbar-toggler p2  bd-highlight" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto " id="Activar">
                    <li class="nav-item active" id="home">
                        <a class="nav-link" href="index.php?operacion=homeAdmin">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Operaciones Astillero
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?operacion=VProducto">Ver productos</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=CProducto">Crear producto</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=MProducto">Modificar producto</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=EProducto">Eliminar producto</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Operaciones Mecanica
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?operacion=VServicios">Ver servicios</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=CServicios">Crear servicios</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=MServicios">Modificar servicios</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=EServicios">Eliminar servicios</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Operaciones Actualidad
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?operacion=VNoticia">Ver noticias</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=CNoticia">Crear noticia</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=MNoticia">Modificar noticia</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=ENoticia">Eliminar noticia</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="contenido">
            <?php echo $contenido; ?>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   
    <script src="/Blanchadell/javaScript/acciones.js"></script>
    <script src="/Blanchadell/javaScript/Contactanos.js"></script>
    <script src="/Blanchadell/javaScript/Astillero.js"></script>
    <script src="/Blanchadell/javaScript/AdAstillero.js"></script>
    <script src="/Blanchadell/javaScript/InicioSesion.js"></script>
    <script src="/Blanchadell/javaScript/Errores.js"></script>

</body>

</html>