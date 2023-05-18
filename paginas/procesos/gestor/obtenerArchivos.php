<?php 
session_start();
require_once "../../clases/Gestor.php";
$Gestor = new Gestor();
$idDocumento = $_POST['idDocumentos'];

echo $Gestor->obtenerRutaArchivo($idDocumento);

?>