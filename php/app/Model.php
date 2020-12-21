<?php
include_once('Config.php');

class Model extends PDO
{

    protected $conexion;

    public function __construct()
    {

        $this->conexion = new PDO('mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre . '', Config::$mvc_bd_usuario, Config::$mvc_bd_clave);
        // Realiza el enlace con la BD en utf-8
        $this->conexion->exec("set names utf8");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function MostrarProductosTipoAstillero($tipo){
        $consulta="select * from astillero where Tipo=:tipo";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':tipo',$tipo);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function ComprobarUsuario($nombre,$pass){
        $consulta="select * from usuario where nombre=:nombre and passwd=:pass";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':pass',$pass);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function ObtenerProductos(){
        $consulta="select * from astillero";
        $result=$this->conexion->prepare($consulta);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);

    }
    public function BuscarProducto($nombre){
        $consulta="select nombre from astillero where nombre=:nombre";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function InserccionDatosProductos($nombre,$tipo,$servicio,$grupo,$casco,$esloraToral,$esloraPP,$manga,$puntal,$TonelajeTRB,$TonelajeGT,$calado,$PesoRosca,$Desplazamiento,$CargaMaxCubierta, $DesplazamientoCarga,$PotenciaPropulsora, $PotenciaAuxiliar, $VelocidadSinVelocidad,$Combustible,$Tripulacion,$AguaPotable,$AguaNegra,$AguaOleosas,$Grua,$Cabrestante,$Generador,$img1,$img2,$img3,$img4,$img5,$img6,$Link1,$Link2,$Link3,$texto ){
        $consulta = "insert into astillero (Nombre,Tipo,Servicio,Grupo,Casco,EsloraToral,EsloraPP,Manga,Puntal,TonelajeTBR,TonelajeGT,Calado,Peso,Desplazamiento,CargaMax,DesplazamientoMax,PotenciaPropulsora,PotenciaAuxiliar,Velocidad,Combustible,AguasPotable,AguasNegras,AguasOleosas,Tripulacion,Grua,Cabrestante,Generador,Texto,Foto1,Foto2,Foto3,Foto4,Foto5,Foto6,Enlace1,Enlace2,Enlace3) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nombre);
        $result->bindParam(2, $tipo);
        $result->bindParam(3, $servicio);
        $result->bindParam(4, $grupo);
        $result->bindParam(5, $casco);
        $result->bindParam(6, $esloraToral);
        $result->bindParam(7, $esloraPP);
        $result->bindParam(8, $manga);
        $result->bindParam(9, $puntal);
        $result->bindParam(10, $TonelajeTRB);
        $result->bindParam(11, $TonelajeGT);
        $result->bindParam(12, $calado);
        $result->bindParam(13, $PesoRosca);
        $result->bindParam(14, $Desplazamiento);
        $result->bindParam(15, $CargaMaxCubierta);
        $result->bindParam(16, $DesplazamientoCarga);
        $result->bindParam(17, $PotenciaPropulsora);
        $result->bindParam(18, $PotenciaAuxiliar);
        $result->bindParam(19, $VelocidadSinVelocidad);
        $result->bindParam(20, $Combustible);
        $result->bindParam(21, $AguaPotable);
        $result->bindParam(22, $AguaNegra);
        $result->bindParam(23, $AguaOleosas);
        $result->bindParam(24, $Tripulacion);
        $result->bindParam(25, $Grua);
        $result->bindParam(26, $Cabrestante);
        $result->bindParam(27, $Generador);
        $result->bindParam(28, $texto);
        $result->bindParam(29, $img1);
        $result->bindParam(30, $img2);
        $result->bindParam(31, $img3);
        $result->bindParam(32, $img4);
        $result->bindParam(33, $img5);
        $result->bindParam(34, $img6);
        $result->bindParam(35, $Link1);
        $result->bindParam(36, $Link2);
        $result->bindParam(37, $Link3);
        $result->execute(); 
        return $result;
    }
    public function EliminarProducto($nombre){
        $consulta="delete from astillero where Nombre=:nombre";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->execute();
        return $result;

    }
}
