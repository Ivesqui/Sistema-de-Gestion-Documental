<?php 
 session_start();
 require_once "../../clases/Gestor.php";
 $Gestor = new Gestor();
 $c = new Conexion();
 $conexion = $c->conectar();

 $n_usuario = $_SESSION['n_usuario'];
 $n_Carpeta = $_POST['carpetasArchivos'];
 $cat_archivo = $_POST['categoriasArchivos'];

 $sql = $conexion -> query("SELECT MAX(id_documentos) AS secuencia_actual FROM documentos WHERE n_usuario = '$n_usuario'");
 $resultado = $sql->fetch_assoc();
 $secuencia_actual = $resultado['secuencia_actual'];


 if($_FILES['archivos']['size'] > 0){
    
   
    $totalArchivos = count($_FILES['archivos']['name']);

    $tiposPermitidos = array('xlsx', 'xls', 'docx', 'csv', 'pdf', 'jpg', 'jpeg', 'png', 'gif', 'doc', 'txt');

    for ($i=0; $i < $totalArchivos; $i++){

        $nombreArchivo  = $_FILES['archivos']['name'][$i];
        $explode = explode('.', $nombreArchivo);
        $tipoArchivo = array_pop($explode);

        if (!in_array($tipoArchivo, $tiposPermitidos)) {
            echo "Error: Tipo de archivo no permitido.";
            continue;
        }

        $nombreArchivo = $secuencia_actual .'_' .$nombreArchivo;
        $rutaAlmacenamiento = $_FILES['archivos']['tmp_name'][$i];
        $carpeta = '../../Carpetas_Usuario/'.$n_usuario.'/'.$n_Carpeta.'/';
        $rutaFinal = $carpeta.$nombreArchivo;


        if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
            $respuesta = $Gestor->agregarRegistroArchivo($cat_archivo, $n_usuario, $nombreArchivo, $tipoArchivo, $rutaFinal);

        
        };
    }

     echo $respuesta;
 } else {
    echo 0;
 }

?>