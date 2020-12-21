<?php
include('libs/utils.php');

class Controller
{
    /* --------------------------------------------------------------------------------------------------------------------------- */
    public function home()
    {
        require __DIR__ . '/templates/home.php';
    }
    public function contacto()
    {
        require __DIR__ . '/templates/contacto.php';
    }
    public function historia()
    {
        require __DIR__ . '/templates/historia.php';
    }
    public function astillero()
    {
        require __DIR__ . '/templates/astillero.php';
    }
    public function contactanos()
    {
        try {
            $val = new Validacion();
            $nombre = recoge("nombre");
            $apellido = recoge("apellidos");
            $telefono = recoge("telefono");
            $email = recoge("email");
            $texto = recoge("texto");
            $valor['nombre'] = $nombre;
            $valor['apellido'] = $apellido;
            $valor['telefono'] = $telefono;
            $valor['email'] = $email;
            $datos = $valor;
            $regla = array(

                array(
                    'name' => 'nombre',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'apellido',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'email',
                    'regla' => 'no-empty,email'
                ),
                array(
                    'name' => 'telefono',
                    'regla' => 'no-empty,ValidarTelefono'
                )
            );
            $resultado = $val->rules($regla, $datos);
            if ($resultado === true) {
                $cuerpo = "Buenas $nombre  $apellido
                No contestar a este correo se genera automaticamente, en breves momentos uno de nuestros empleados se pondra en contacto
                con usted para aclararle :
                $texto
                En caso de que no recibamos ninguna respuesta con el email de la solucion al cabo de 1 dia le llamaremos";
                $to = "terectico2017@gmail.com";
                $subject = "accessed the webpage";
                $message = $cuerpo;
                $headers = "From:" . $email;
                if (mail($to, $subject, $message, $headers)) {
                    $params = 0;
                } else {
                    $params = 'Sorry, the email could not be sent';
                }
            } else {
                foreach ($resultado as $valor => $k) {
                    foreach ($k as $v => $s) {
                        $params = $s[1];
                    }
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }

        require __DIR__ . '/templates/json.php';
    }
    public function InicioSesion()
    {
        require __DIR__ . '/templates/InicioSesion.php';
    }
    public function CatAstillero()
    {
        $tipo = recoge("tipo");
        $m = new Model();
        $resultado = $m->MostrarProductosTipoAstillero($tipo);
        require __DIR__ . '/templates/ProductosAstillero.php';
    }
    public function FormIniciarSesion()
    {
        try {
            $m = new Model();
            $v = new Validacion();
            $nombre = recoge('usuario');
            $pass = recoge('pass');

            $valor['nombre'] = $nombre;
            $valor['pass'] = $pass;
            $datos = $valor;
            $regla = array(
                array(
                    'name' => 'nombre',
                    'regla' => 'no-empty,ValidarUsuario'
                ),
                array(
                    'name' => 'pass',
                    'regla' => 'no-empty,ValidarPasswd'
                )
            );
            $resultado = $v->rules($regla, $datos);

            if ($resultado === true) {
                $resultadoBD = $m->ComprobarUsuario($nombre, $pass);
                if (!empty($resultadoBD)) {
                    Sesion::iniciarSesion("usuario", $resultadoBD[0][0]);
                    Sesion::iniciarSesion("nivel", $resultadoBD[0][2]);
                    $params = $_SESSION['nivel'];
                } else {
                    $params = "Lo sentimos no es correcta la informacion proporcionada";
                }
            } else {
                foreach ($resultado as $valor => $k) {
                    foreach ($k as $v => $s) {
                        $params = $s;
                    }
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    public function homeAdmin()
    {
        if (isset($_SESSION['usuario'])) {
            require __DIR__ . '/templates/homeAdmin.php';
        } else {
            require __DIR__ . '/templates/home.php';
        }
    }
    function PaginaError()
    {
        require __DIR__ . '/../web/404.php';
    }
    function SalirSesion()
    {
        session_destroy();
        require __DIR__ . '/templates/home.php';
    }

    //Operaciones con Astillero
    function VProducto()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerProductos();
        require __DIR__ . '/templates/VProducto.php';
    }
    function CProducto()
    {
        require __DIR__ . '/templates/CProducto.php';
    }
    function CrearProducto()
    {
        try {
            $v = new Validacion();
            $m = new Model();

            $nombre = recoge("nombre");
            $tipo = recoge("tipo");
            $servicio = recoge("servicio");
            $grupo = recoge("grupo");
            $casco = recoge("casco");
            $esloraToral = recoge("esloraToral");
            $esloraPP = recoge("esloraPP");
            $manga = recoge("manga");
            $puntal = recoge("puntal");
            $TonelajeTRB = recoge("TonelajeTRB");
            $TonelajeGT = recoge("TonelajeGT");
            $calado = recoge("calado");
            $PesoRosca = recoge("PesoRosca");
            $Desplazamiento = recoge("Desplazamiento");
            $CargaMaxCubierta = recoge("CargaMaxCubierta");
            $DesplazamientoCarga = recoge("DesplazamientoCarga");
            $PotenciaPropulsora = recoge("PotenciaPropulsora");
            $PotenciaAuxiliar = recoge("PotenciaAuxiliar");
            $VelocidadSinVelocidad = recoge("VelocidadSinVelocidad");
            $Combustible = recoge("Combustible");
            $Tripulacion = recoge("Tripulacion");
            $AguaPotable = recoge("AguaPotable");
            $AguaNegra = recoge("AguaNegra");
            $AguaOleosas = recoge("AguaOleosas");
            $Grua = recoge("Grua");
            $Cabrestante = recoge("Cabrestante");
            $Generador = recoge("Generador");
            $img1 = recoge("img1");
            $img2 = recoge("img2");
            $img3 = recoge("img3");
            $img4 = recoge("img4");
            $img5 = recoge("img5");
            $img6 = recoge("img6");
            $Link1 = recoge("link1");
            $Link2 = recoge("link2");
            $Link3 = recoge("link3");
            $texto = recoge("texto");

            $valor['nombre'] = $nombre;
            $valor['tipo'] = $tipo;
            $valor['servicio'] = $servicio;
            $valor['grupo'] = $grupo;
            $valor['casco'] = $casco;
            $valor['esloraToral'] = $esloraToral;
            $valor['esloraPP'] = $esloraPP;
            $valor['manga'] = $manga;
            $valor['puntal'] = $puntal;
            $valor['TonelajeTRB'] = $TonelajeTRB;
            $valor['TonelajeGT'] = $TonelajeGT;
            $valor['calado'] = $calado;
            $valor['PesoRosca'] = $PesoRosca;
            $valor['Desplazamiento'] = $Desplazamiento;
            $valor['CargaMaxCubierta'] = $CargaMaxCubierta;
            $valor['DesplazamientoCarga'] = $DesplazamientoCarga;
            $valor['PotenciaPropulsora'] = $PotenciaPropulsora;
            $valor['PotenciaAuxiliar'] = $PotenciaAuxiliar;
            $valor['VelocidadSinVelocidad'] = $VelocidadSinVelocidad;
            $valor['Combustible'] = $Combustible;
            $valor['Tripulacion'] = $Tripulacion;
            $valor['AguaPotable'] = $AguaPotable;
            $valor['AguaNegra'] = $AguaNegra;
            $valor['AguaOleosas'] = $AguaOleosas;
            $valor['Grua'] = $Grua;
            $valor['Cabrestante'] = $Cabrestante;
            $valor['Generador'] = $Generador;
            $valor['Link1'] = $Link1;
            $valor['Link2'] = $Link2;
            $valor['Link3'] = $Link3;
            $datos = $valor;
            $regla = array(
                array(
                    'name' => 'nombre',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'tipo',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'servicio',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'grupo',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'casco',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'esloraToral',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'esloraPP',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'manga',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'puntal',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'TonelajeTRB',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'TonelajeGT',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'calado',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'PesoRosca',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'Desplazamiento',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'CargaMaxCubierta',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'DesplazamientoCarga',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'PotenciaPropulsora',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'PotenciaAuxiliar',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'VelocidadSinVelocidad',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'Combustible',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'Tripulacion',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'AguaPotable',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'AguaNegra',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'AguaOleosas',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'Grua',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'Cabrestante',
                    'regla' => 'no-empty,numeric'
                ),
                array(
                    'name' => 'Generador',
                    'regla' => 'no-empty,numeric'
                ),

                array(
                    'name' => 'Link1',
                    'regla' => 'no-empty,ValidarURL'
                ),
                array(
                    'name' => 'Link2',
                    'regla' => 'no-empty,ValidarURL'
                ),
                array(
                    'name' => 'Link3',
                    'regla' => 'no-empty,ValidarURL'
                ),

            );
            $resultado = $v->rules($regla, $datos);
            if ($resultado === true) {
                if ($m->BuscarProducto($nombre)) {
                    $params = 0;
                } else {
                    if ($m->InserccionDatosProductos($nombre, $tipo, $servicio, $grupo, $casco, $esloraToral, $esloraPP, $manga, $puntal, $TonelajeTRB, $TonelajeGT, $calado, $PesoRosca, $Desplazamiento, $CargaMaxCubierta, $DesplazamientoCarga, $PotenciaPropulsora, $PotenciaAuxiliar, $VelocidadSinVelocidad, $Combustible, $Tripulacion, $AguaPotable, $AguaNegra, $AguaOleosas, $Grua, $Cabrestante, $Generador, $img1, $img2, $img3, $img4, $img5, $img6, $Link1, $Link2, $Link3, $texto)) {
                        $params = 1;
                    } else {
                        $params = 2;
                    }
                }
            } else {
                foreach ($resultado as $valor => $k) {
                    foreach ($k as $v => $s) {
                        $params = $s;
                    }
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }

    function MProducto()
    {
        require __DIR__ . '/templates/MProducto.php';
    }
    function EProducto()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerProductos();
        require __DIR__ . '/templates/EProducto.php';
    }
    function EliminarProducto()
    {
        $m = new Model();
        $nombre = recoge('nombre');

        if ($m->EliminarProducto($nombre)) {
            $dir = '../imagenes/imagenesSubidaBarco/' . $nombre.'/';
            if ($this->EliminarImagen($dir) == 0) {
                $params = "Se elimino los datos de la BBDatos, las imagenes no se pudieron eliminar, eliminalas manualmente, lo siento";
            } else {
                $params = "Fantastico se elimino el producto";
            }
        } else {
            $params = "Lo sentimos no se pudo eliminar el producto";
        }

        require __DIR__ . '/templates/json.php';
    }

    //Operaciones con Servicios
    function VServicios()
    {
        require __DIR__ . '/templates/VServicios.php';
    }
    function CServicios()
    {
        require __DIR__ . '/templates/CServicios.php';
    }
    function MServicios()
    {
        require __DIR__ . '/templates/MServicios.php';
    }
    function EServicios()
    {
        require __DIR__ . '/templates/EServicios.php';
    }

    //Operaciones con Noticia
    function VNoticia()
    {
        require __DIR__ . '/templates/VNoticia.php';
    }
    function CNoticia()
    {
        require __DIR__ . '/templates/CNoticia.php';
    }
    function MNoticia()
    {
        require __DIR__ . '/templates/MNoticia.php';
    }
    function ENoticia()
    {
        require __DIR__ . '/templates/ENoticia.php';
    }


    public function SubirImg()
    {

        if ($_FILES) {
            foreach ($_FILES as $file) {
                if ($file["error"] == UPLOAD_ERR_OK) {
                    // movemos el archivo a la carpeta donde se encuentra este archivo 
                    $nombre = recoge("nombre");
                    if (!is_dir('../imagenes/imagenesSubidaBarco/' . $nombre)) {
                        mkdir('../imagenes/imagenesSubidaBarco/' . $nombre, true);
                        move_uploaded_file($file["tmp_name"], Config::$dir . '/' . $nombre . '/' . $file["name"]);
                        $valor = Config::$dir . '/' . $file["name"];
                    } else {
                        move_uploaded_file($file["tmp_name"], Config::$dir . '/' . $nombre . '/' . $file["name"]);
                        $valor = Config::$dir . '/' . $file["name"];
                    }
                }
            }
        } else {

            $valor = false;

            $ok = 0;
        }
        # devolvemos un json con la información
        echo $valor;
    }
    public function EliminarImagen($dir)
    {
        $valor = 0;
        $list = dir($dir);

        while(($file = $list->read()) !== false) {
            if($file === "." || $file === "..") continue;
            if(is_file($dir . $file)) {
                unlink($dir . $file);
            } elseif(is_dir($dir . $file)) {
                 $this->EliminarImagen($dir . $file);
            }
        }
        if(rmdir($dir)){
           $valor=1;
        }
    return $valor;
    }
}
