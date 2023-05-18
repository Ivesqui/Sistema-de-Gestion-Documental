<?php 
session_start();
require_once "../../conexion/Conexion.php";
$c = new Conexion();
$conexion = $c->conectar();
$sql = $conexion -> query("SELECT cat_nombre AS nombreCategoria,
                           insert_categoria AS fechaInsert,
                           id_categorias AS idCategorias
                           FROM categorias 
                           INNER JOIN carpetas AS carpetas
                           ON categorias.`car_nombre`= carpetas.`car_nombre`
                           WHERE n_usuario = '$_SESSION[n_usuario]'"); 
?>

<div class="table-responsive">
    <table class="table table-hover table-primary" id="tablaCategoriasDataTable">
            <thead>
                <tr style="text-align: center;">
                    <th>Nombre de Categoría</th>
                    <th>Fecha Creación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                            
                               
            <!-- ESTE ES EL QUE FUNCIONA DIRECTO -->
 

            <?php while ($result = $sql->fetch_assoc()){  
                
                $idCategorias = $result['idCategorias'];
                ?>
                    
                     <tr>
                    <td style="text-align: center;"><?php echo $result['nombreCategoria']?></td>
                    <td style="text-align: center;"><?php echo $result['fechaInsert'] ?></td>
                    <td style="text-align: center;">
                    
                <a class="btn btn-warning btn-small" 
                onclick="obtenerDatosCategorias('<?php echo $idCategorias?>')" 
                data-toggle="modal" 
                data-target="#modalActualizarCategoria">
                            <span class="fa-solid fa-pen">
                            </span>
                </a>
                    </td>
                    <td style="text-align: center;">
                        <a class="btn btn-danger btn-small" onclick="eliminarCategorias('<?php echo $idCategorias?>')">
                            <span class="fa-solid fa-trash-can"> 
                            </span>
                        </a>
                    </td>      
                </tr>


                    <?php 
                } ?>
 

            </tbody>
    </table>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaCategoriasDataTable').DataTable();
    });
</script>
