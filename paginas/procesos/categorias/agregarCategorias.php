<?php 
session_start();
require_once "../../clases/Categorias.php";
$Categorias = new Categorias();

$n_usuario = $_SESSION['n_usuario'];
$nombreCarpeta =  $_POST['carpetasArchivos'];
$nombreCategoria = $_POST['cat_nombre'];

if($Categorias->registrarCategorias($nombreCarpeta, $nombreCategoria)){
        header("location:../../modulos/sistema/sgd_categorias.php");
    } else {
        echo "No se pudo registrar categoria";
    }
?>