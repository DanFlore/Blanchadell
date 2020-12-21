<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/Blanchadell/php/app/img/logo.jpg" type="image/jpg" />
    <link rel="stylesheet" href="/Blanchadell/interfaces/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href=" https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.css " rel=" stylesheet " />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</head>

<body class="">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark justify-content-between">

            <div class="row ">
                <div class="col-5">
                    <img src="/Blanchadell/php/app/img/logo_texto.jpg" alt="No se encuentra el logo" id="logo" style="height:70px;">
                </div>
                <div class="col-3"></div>
                <div class="col-4 mt-4">
                    <h2 class="cmLogo">desde 1860</h2>
                </div>

                <!--  <form class="form-inline my-2 my-lg-0 col-11 justify-content-end">
                    <input class="form-control mr-sm-2" type="search" placeholder="¿Que buscas?" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form> -->
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2E76B8;">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button class="navbar-toggler p2  bd-highlight" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto MargenNavBar" id="Activar">
                    <li class="nav-item active" id="home">
                        <a class="nav-link" href="index.php?operacion=home">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actividades
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?operacion=Astillero">Astilleros</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=Mecanica">Mecánica naval</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?operacion=historia" id="historia">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?operacion=contacto" id="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?operacion=noticias" id="noticias">Noticias</a>
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
    <footer class="bg-dark text-light">
        <div class="d-flex justify-content-around mt-3">
            <div class="col-2">
                <img src="/Blanchadell/php/app/img/logo.jpg" alt="No se encuentra el logo" id="logo" style="height:70px;">
            </div>
            <div class="col-4"></div>
            <div class="c0l-7 mt-1">
                <p class="EnlacesDePieDePagina">
                    <i class="fab fa-instagram"></i><a href="https://www.instagram.com/blanchadell_sl/" target="_blank" class="text-light QuitarColorLink"> Instagram</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-facebook-square icono"></i><a href="https://www.facebook.com/talleres.blanchadell/" target="_blank" class="text-light QuitarColorLink"> Facebook</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-twitter icono"></i><a href="https://twitter.com/Blanchadell_SL" target="_blank" class="text-light QuitarColorLink"> Twitter</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-youtube"></i><a href="https://www.youtube.com/channel/UCfLhT3oyaSdd5tlZArYY4CQ" target="_blank" class="text-light QuitarColorLink"> Youtube</a>
                </p>
            </div>
            </nav>
    </footer>
    <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <script src="/Blanchadell/javaScript/acciones.js"></script>
    <script src="/Blanchadell/javaScript/Contactanos.js"></script>
    <script src="/Blanchadell/javaScript/Astillero.js"></script>
    <script src="/Blanchadell/javaScript/InicioSesion.js"></script>
    <script src="/Blanchadell/javaScript/Errores.js"></script>


</body>

</html>