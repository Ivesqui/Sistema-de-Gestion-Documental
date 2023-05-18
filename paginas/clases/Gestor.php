<?php 

    include "../../conexion/Conexion.php";
 

    class Gestor extends Conexion{




        public function agregarRegistroArchivo($c_Archivos, $n_usuario, $nombreArchivo, $tipoArchivo, $rutaFinal){
            $conexion = parent::conectar();

            $sql = "INSERT INTO documentos (cat_nombre,
                                            n_usuario, 
                                            nombre_arch, 
                                            tipo_arch,
                                            ruta_arch) 
                                            VALUES (?,?,?,?,?)";
            
            $query = $conexion->prepare($sql);

            $query->bind_param("sssss", $c_Archivos, $n_usuario, $nombreArchivo, $tipoArchivo, $rutaFinal);
            
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
        
        public function obtenNombreArchivo($idDocumentos) {
            $conexion = parent::conectar();
            $sql = "SELECT nombre_arch 
                    FROM documentos
                    WHERE id_documentos = '$idDocumentos'";

            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_array($result)['nombre_arch'];
        }

        public function obtenCarpetaArchivo($idDocumento) {
            $conexion = parent::conectar();
            $sql = "SELECT car_nombre AS nombreDocumento 
                    FROM categorias AS categorias
                    INNER JOIN documentos AS documentos 
                    ON categorias.`cat_nombre` = documentos.`cat_nombre` 
                    AND documentos.`id_documentos` = '$idDocumento'";

            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_array($result)['nombreDocumento'];
        }

        public function eliminarRegistroArchivo($idDocumento){
            $conexion = parent::conectar();
            $sql = "DELETE FROM documentos 
                    WHERE id_documentos = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idDocumento);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }

        public function obtenerRutaArchivo($idDocumento) {
            $nombreCarpeta = self::obtenCarpetaArchivo($idDocumento);
            $conexion = parent::conectar();
            $sql = "SELECT nombre_arch, tipo_arch 
                    FROM documentos 
                    WHERE id_documentos = '$idDocumento'";
            $result = mysqli_query($conexion, $sql);
            
            $datos =  mysqli_fetch_array($result);
            $nombreArchivo = $datos['nombre_arch'];
            $extension = $datos['tipo_arch'];
            return self::extensionArchivo($nombreArchivo,$extension,$nombreCarpeta);

        }

        public function extensionArchivo($nombre_arch, $extension, $n_carpeta){
            $n_usuario = $_SESSION['n_usuario'];
        

            $ruta = "../../Carpetas_usuario/".$n_usuario."/".$n_carpeta."/".$nombre_arch;
            switch ($extension) {
                case 'png':
                        return '<img src="'.$ruta.'" width="90%">';
                    break;
                    case 'jpg':
                        return '<img style="width:100%" src="' . $ruta . '">';
                    break;
                case 'pdf':
                    return '<embed src="' . $ruta . '#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="420px" />';
                    break;
                case 'docx':
                    echo '<iframe src="https://docs.google.com/gview?url='.$ruta.'&embedded=true"></iframe>';
                    break;
                case 'txt':
                        return '<embed src="' . $ruta . '#toolbar=0&navpanes=0&scrollbar=0" type="text/text" width="100%" height="420px" />';
                        break;
                case 'xml':
                    return '<embed src="' . $ruta . '#toolbar=0&navpanes=0&scrollbar=0" type="text/xml" width="100%" height="420px" />';
                    break;
                default:
                    break;
            }

            
        }


    }


?>