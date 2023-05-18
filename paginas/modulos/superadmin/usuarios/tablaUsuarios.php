<?php session_start()
?>

<div class="table-responsive">
    <table class="table table-hover table-primary" id="tablaUsuariosDataTable">
            <thead>
                <tr style="text-align: center;">
                    <th>Nick Usuario</th>
                    <th>Nombre Usuario</th>
                    <th>Apellido Usuario</th>
                    <th>Fecha Ingreso</th>
                    <th>Rol</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                            

            <?php 
                require ("../../../conexion/Conexion.php");

                $c = new Conexion();
                $conexion = $c->conectar();
                $sql = $conexion -> query("SELECT 
                usuario.`n_usuario` AS nickUsuario,
                usuario.`nombres` AS nombreUsuario,
                usuario.`apellidos` AS apellidoUsuario,
                usuario.`insert_user` AS fechaIngreso,
                rol.`nom_rol` AS rol
                FROM usuario 
                INNER JOIN rol ON rol.`id_rol` = usuario.`id_rol`;");
                while ($result = $sql->fetch_assoc()){  ?>


                     <tr>
                    <td style="text-align: center;"><?php echo $result['nickUsuario'] ?></td>
                    <td style="text-align: center;"><?php echo $result['nombreUsuario'] ?></td>
                    <td style="text-align: center;"><?php echo $result['apellidoUsuario'] ?></td>
                    <td style="text-align: center;"><?php echo $result['fechaIngreso'] ?></td>
                    <td style="text-align: center;"><?php echo $result['rol'] ?></td>
                    <td style="text-align: center;">

                <a class="btn btn-warning btn-small"  
                href="../superadmin/sgd_editarusuarios.php">
                            <span class="fa-solid fa-pen">
                            </span>
                </a>
                    </td>
                    <td style="text-align: center;">
                        <a class="btn btn-danger btn-small" 
                        href="">
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
        $('#tablaUsuariosDataTable').DataTable();
    });
</script>
