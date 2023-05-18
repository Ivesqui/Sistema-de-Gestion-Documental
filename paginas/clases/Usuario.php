<?php 
include "../../conexion/Conexion.php";

class Usuario extends Conexion{

    public function registrar($nombres, $apellidos, $usuario, $clave, $rol){

        $conexion = parent::conectar();
        $sql = 'INSERT INTO usuario (nombres, apellidos, n_usuario, clave, id_rol) 
        VALUES (?,?,?,?,?)';
        $query = $conexion->prepare($sql);
        $query->bind_param('ssssi', $nombres, $apellidos, $usuario, $clave, $rol);
        return $query->execute();

    }

    public function login($usuario, $clave){
        $conexion = parent::conectar();
    
        //Traemos la clave asociada al usuario para lo cual usamos una variable 
        $claveExistente = "";
        $sql = "SELECT usuario.n_usuario, usuario.clave, rol.nom_rol AS rol FROM usuario
            JOIN rol ON usuario.id_rol = rol.id_rol
            WHERE usuario.n_usuario = '$usuario'";
    
        $respuesta = mysqli_query($conexion, $sql);
        $usuarioEncontrado = mysqli_fetch_assoc($respuesta);
        $claveExistente = $usuarioEncontrado['clave'];
        $rolUsuario = $usuarioEncontrado['rol'];
    
        //Verificamos la clave
        if (password_verify($clave, $claveExistente)){
            $_SESSION['n_usuario'] = $usuario;
    
            if ($rolUsuario === 'Administrador') {
                header('location:../../modulos/superadmin/sgd_usuarios.php');
                exit();
            } else {
                header('location:../../modulos/sistema/sgd_inicio.php');
                exit();
            }
        } else {
            return false;
        }
    }

    public function eliminarUsuario($idUsuario, $n_usuario){

        $conexion = parent::conectar();
        $sql = "DELETE FROM `sgd_database`.`usuario` 
                WHERE `id_user` = '$idUsuario'";
        $query = $conexion->prepare($sql);

        $carpeta = '../../Carpetas_Usuario/'.$n_usuario;

        foreach(glob($carpeta."/*") as $elemento){

            if(is_dir($elemento))
            {
                unlink($elemento);
            }

        }
        rmdir($carpeta);
        
        return $query->execute();

    }
} 

?>