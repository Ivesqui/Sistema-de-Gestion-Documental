<?php 
session_start();
 require_once "../../conexion/Conexion.php";
 $c = new Conexion();
 $conexion = $c->conectar();
 $n_usuario = $_SESSION['n_usuario'];
 $sql = $conexion -> query("SELECT
                documentos.`id_documentos` AS idDocumento,
                usuario.`n_usuario` AS nombreUsuario,
                categorias.`cat_nombre` AS nombreCategoria,
                carpetas.`car_nombre` AS nombreCarpeta,
                documentos.`nombre_arch` AS nombreDocumento,
                documentos.`tipo_arch` AS extensionDocumento,
                documentos.`ruta_arch` AS rutaArchivo,
                documentos.`insert_arch` AS fechaInsert
                FROM documentos 
                AS documentos 
                INNER JOIN usuario AS usuario ON documentos.`n_usuario` = usuario.`n_usuario`
                INNER JOIN categorias AS categorias ON documentos.`cat_nombre` = categorias.`cat_nombre`
                INNER JOIN carpetas AS carpetas ON categorias.`car_nombre` = carpetas.`car_nombre`
                AND documentos.`n_usuario` = '$n_usuario';");


?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive"></div>
        <table class="table table-hover table-primary" id="tablaGestorDataTable">
            <thead>
                <tr style="text-align: center;">
                    <th>Nombre de Documento</th>
                    <th>Extensión de Documento</th>
                    <th>Categoría de Documento</th>
                    <th>Carpeta Contenedora</th>
                    <th>Descargar</th>
                    <th>Visualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
        <tbody>

        <?php 

            /*
            Arreglo de Extensiones validas 
            */

            $extensionesPermitidas = array('png','jpg','pdf', 'txt', 'xml');
                
                while ($result = $sql->fetch_assoc()){  
                    
                    $rutaDescarga = '../../Carpetas_Usuario/'.$n_usuario.'/'.$result['nombreCarpeta'].'/'.$result['nombreDocumento'];
                    $nombreDocumento = $result['nombreDocumento'];
                    $idDocumento = $result['idDocumento']
                    ?>

                    
            <tr>
                <td style="text-align: center;"><?php echo $result['nombreDocumento'] ?></td>
                <td style="text-align: center;"><?php echo $result['extensionDocumento']?></td>
                <td style="text-align: center;"><?php echo $result['nombreCategoria']?></td>
                <td style="text-align: center;"><?php echo $result['nombreCarpeta']?></td>
                <td style="text-align: center;">
                    <a 
                    class="btn btn-primary btn-small"
                    href="<?php echo $rutaDescarga; ?>" 
                    download="<?php echo $nombreDocumento; ?>">
                        <span class="fa-solid fa-file-arrow-down"></span>
                    </a>
                </td>
                <td style="text-align: center;">
                    <?php 
                    for ($i=0; $i < count($extensionesPermitidas); $i++){
                        if($extensionesPermitidas[$i] == $result['extensionDocumento']){ 
                            ?>
                            <button type="button" class="btn btn-success btn-small" 
                                    data-toggle="modal" 
                                    data-target="#visualizarArchivo" onclick="obtenerArchivoId('<?php echo $idDocumento ?>')">
                                <span class="fa-solid fa-eye"></span>
                            </button>
                        <?php
                        }

                    }
                    
                    ?>
                </td>
                <td style="text-align: center;">
                    <button type="button" class="btn btn-danger btn-small" onclick="eliminarArchivos('<?php echo $idDocumento?>')">
                        <span class="fa-solid fa-trash-can"></span>
                    </button>
                </td>
            </tr>

            <?php 
                } ?>
 
        </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaGestorDataTable').DataTable();
    });
</script>
