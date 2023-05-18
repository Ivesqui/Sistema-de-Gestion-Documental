<?php session_start()
?>

<div class="table-responsive">
    <table class="table table-hover table-primary" id="tablaCarpetasDataTable">
            <thead>
                <tr style="text-align: center;">
                    <th>Nombre de Carpeta</th>
                    <th>Fecha Creación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                            
                               
            <!-- ESTE ES EL QUE FUNCIONA DIRECTO -->
 

            <?php 
                require ("../../conexion/Conexion.php");

                $c = new Conexion();
                $conexion = $c->conectar();
                $sql = $conexion -> query("SELECT * FROM carpetas WHERE n_usuario = '$_SESSION[n_usuario]'");
                while ($result = $sql->fetch_assoc()){  ?>


                     <tr>
                    <td style="text-align: center;"><?php echo $result['car_nombre'] ?></td>
                    <td style="text-align: center;"><?php echo $result['insert_carpeta'] ?></td>
                    <td style="text-align: center;">
                    
                <a class="btn btn-warning btn-small"  
                href="../../modulos/sistema/editarCarpeta.php?id_carpeta=<?php echo $result['id_carpetas']?>">
                            <span class="fa-solid fa-pen">
                            </span>
                </a>
                    </td>
                    <td style="text-align: center;">
                        <a class="btn btn-danger btn-small" 
                        href="../../procesos/carpetas/eliminarCarpeta.php?n_carpeta=<?php echo $result['car_nombre']?>">
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
        $('#tablaCarpetasDataTable').DataTable();
    });
</script>


