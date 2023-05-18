<?php session_start();
 
    include "../../clases/Usuario.php";

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    $Auth = new Usuario();
    
    if($Auth->login($usuario, $clave)){
        // Redireccionamos según el rol del usuario
        if ($_SESSION['rol'] === 'Administrador') {
            header("location:../../modulos/superadmin/sgd_usuarios.php");
        } else {
            header("location:../../modulos/sistema/sgd_inicio.php");
        }
        exit();
    }else{
        echo "Credenciales Incorrectas";
    }
?>