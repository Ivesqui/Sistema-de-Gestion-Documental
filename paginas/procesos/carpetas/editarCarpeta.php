<?php 
session_start();

require_once "../../clases/Carpetas.php";

$vnombre = $_POST['v_nombre'];
$nnombre = $_POST['n_nombre'];

 
$Carpetas = new Carpetas();

$Carpetas->editarCarpetas($vnombre,$nnombre);
  
?>