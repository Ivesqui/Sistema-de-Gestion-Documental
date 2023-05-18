<?php 
    include "../../clases/Usuario.php";
    
    
    //Agregamos los parámetros que se van a enviar bajo la id. respectivo

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
    $rol = 2;

    //Instanciamos la clase Usuario

    $Auth = new Usuario();

    //Si se logra enviar los datos a la clase Auth nos redirecciona al login del sistema

    if($Auth->registrar($nombres,$apellidos,$usuario,$clave, $rol)){
        header("location:../../modulos/sistema/sgd_login.php");
    } else {
        echo "No se pudo registrar";
    }


?>