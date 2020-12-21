<?php
require_once __DIR__ . '/app/Config.php';
require_once __DIR__ . '/app/Model.php';
require_once __DIR__ . '/app/Controller.php';
require_once __DIR__ . '/app/Sesiones.php';
require_once __DIR__ . '/app/libs/Validar.php';

$map = array(
    'home' => array('controller' =>'Controller', 'action' =>'home', 'acceso'=>0),
    'Astillero' => array('controller' =>'Controller', 'action' =>'astillero', 'acceso'=>0),
    'Mecanica' => array('controller' =>'Controller', 'action' =>'Mecanica', 'acceso'=>0),
    'historia' => array('controller' =>'Controller', 'action' =>'historia', 'acceso'=>0),
    'contacto' => array('controller' =>'Controller', 'action' =>'contacto', 'acceso'=>0),
    'noticias' => array('controller' =>'Controller', 'action' =>'noticias', 'acceso'=>0),
    'login' => array('controller' =>'Controller', 'action' =>'login', 'acceso'=>0),
    'contactanos'=>array('controller'=>'Controller','action'=>'contactanos','acceso'=>0),
    'CatAstillero'=>array('controller'=>'Controller','action'=>'CatAstillero','acceso'=>0),
    'InicioSesion'=>array('controller'=>'Controller','action'=>'InicioSesion','acceso'=>0),
    'FormIniciarSesion'=>array('controller'=>'Controller','action'=>'FormIniciarSesion','acceso'=>0),
    'PaginaAdmin'=>array('controller'=>'Controller','action'=>'PaginaAdmin','acceso'=>1),
    'homeAdmin'=>array('controller'=>'Controller','action'=>'homeAdmin','acceso'=>1),
    'PaginaError'=>array('controller'=>'Controller','action'=>'PaginaError','acceso'=>0),
    'SalirSesion'=>array('controller'=>'Controller','action'=>'SalirSesion','acceso'=>1),
   
    'VProducto'=>array('controller'=>'Controller','action'=>'VProducto','acceso'=>1),
    'CProducto'=>array('controller'=>'Controller','action'=>'CProducto','acceso'=>1),
    'CrearProducto'=>array('controller'=>'Controller','action'=>'CrearProducto','acceso'=>1),
    'SubirImg'=>array('controller'=>'Controller','action'=>'SubirImg','acceso'=>1),
    'MProducto'=>array('controller'=>'Controller','action'=>'MProducto','acceso'=>1),
    'EProducto'=>array('controller'=>'Controller','action'=>'EProducto','acceso'=>1), 
    'EliminarProducto'=>array('controller'=>'Controller','action'=>'EliminarProducto','acceso'=>1), 

    

    'VServicios'=>array('controller'=>'Controller','action'=>'VServicios','acceso'=>1),
    'CServicios'=>array('controller'=>'Controller','action'=>'CServicios','acceso'=>1),
    'MServicios'=>array('controller'=>'Controller','action'=>'MServicios','acceso'=>1),
    'EServicios'=>array('controller'=>'Controller','action'=>'EServicios','acceso'=>1),

    'VNoticia'=>array('controller'=>'Controller','action'=>'VNoticia','acceso'=>1),
    'CNoticia'=>array('controller'=>'Controller','action'=>'CNoticia','acceso'=>1),
    'MNoticia'=>array('controller'=>'Controller','action'=>'MNoticia','acceso'=>1),
    'ENoticia'=>array('controller'=>'Controller','action'=>'ENoticia','acceso'=>1),

);    
   
$sesion= new Sesion();  
if(!isset($_SESSION['nivel'])){
    $_SESSION['nivel']=0;
}

if (isset($_REQUEST['operacion'])) {  
    if (isset($map[$_REQUEST['operacion']])) {
        $ruta = $_REQUEST['operacion'];
    } else {
        $ruta='PaginaError';
    }
} else {
    $ruta = 'home';
}

$controlador = $map[$ruta];

if (method_exists($controlador['controller'], $controlador['action']) && ($controlador['acceso']==0 || $controlador['acceso']<=$_SESSION['nivel'])) {
    call_user_func(array(
        new $controlador['controller'],
        $controlador['action']
    ));
} else {
    if(!($controlador['acceso']==0 || $controlador['acceso']<=$_SESSION['nivel'])){
        echo "Lo sentimos no tiene permisos para acceder a este sitio";
    }else{
        echo " Lo sentimos la ejecucion espefificada no existe :(";
} 
}
