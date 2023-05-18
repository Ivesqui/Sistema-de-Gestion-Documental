<?php 
 session_start();
 require_once "../../clases/Gestor.php";
 $Gestor = new Gestor();
 $idDocumento = $_POST['idDocumentos'];
 $n_usuario = $_SESSION['n_usuario'];

$nombreCarpeta = $Gestor->obtenCarpetaArchivo($idDocumento);
$nombreDocumento = $Gestor->obtenNombreArchivo($idDocumento);

 

 $rutaEliminar = "../../Carpetas_usuario/".$n_usuario."/".$nombreCarpeta."/".$nombreDocumento;
    if(unlink($rutaEliminar)){
    echo $Gestor->eliminarRegistroArchivo($idDocumento); 
    }else{
        echo 0;
    }
 
 



?>