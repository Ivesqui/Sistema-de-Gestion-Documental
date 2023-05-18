<?php 
session_start();

require_once "../../clases/Carpetas.php";


$Carpetas = new Carpetas();

$n_usuario = $_SESSION['n_usuario'];
$nombreCarpeta= $_GET['n_carpeta'];

if($Carpetas->eliminarCarpetas($n_usuario, $nombreCarpeta)){
       header("location:../../modulos/sistema/sgd_carpetas.php");
    } else {
        echo "No se pudo eliminar";
    }
?>