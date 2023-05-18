<?php 
session_start();

require_once "../../clases/Carpetas.php";


$n_usuario = $_SESSION['n_usuario'];
$nombreCarpeta = $_POST['car_nombre'];

$Carpetas = new Carpetas();

if($Carpetas->consultarCarpetas($n_usuario)){
        header("location:../../modulos/sistema/sgd_carpetas.php");
    } else {
        echo "Datos no existentes";
    }


?>