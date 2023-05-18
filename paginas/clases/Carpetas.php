<?php 
include "../../conexion/Conexion.php";
    
class Carpetas extends Conexion{
    public function registrarCarpetas($n_usuario,$nombreCarpeta) {
        $conexion = parent::conectar();

        $sql = "INSERT INTO carpetas (n_usuario,car_nombre) 
                VALUES(?, ?)";

        

        $query = $conexion->prepare($sql);
        $query->bind_param('ss', $n_usuario,$nombreCarpeta);

        $carpeta = '../../Carpetas_usuario/'.$n_usuario.'/'.$nombreCarpeta;

        if (!file_exists($carpeta)){
            mkdir($carpeta, 0777, true);
        }else{
            echo 'Error! la carpeta ya existe';
        }
        return $query->execute();
   
    }

    public function eliminarCarpetas($n_usuario,$nombreCarpeta){
        
        $conexion = parent::conectar();
    
        $sql = "DELETE FROM `sgd_database`.`carpetas` 
                WHERE `car_nombre` = '$nombreCarpeta'";

        $query = $conexion->prepare($sql);

        $carpeta = '../../Carpetas_Usuario/'.$n_usuario.'/'.$nombreCarpeta;

        foreach(glob($carpeta."/*") as $elemento){

            if(is_dir($elemento))
            {
                unlink($elemento);
            }

        }
        rmdir($carpeta);
        return $query->execute();
    }

    public function editarCarpetas($vnombre,$nnombre){
        
        $vnombre = $_POST['v_nombre'];
        $nnombre = $_POST['n_nombre'];
        $n_usuario = $_SESSION['n_usuario'];

        $vcarpeta = '../../Carpetas_Usuario/'.$n_usuario.'/'.$vnombre;
        $ncarpeta = '../../Carpetas_Usuario/'.$n_usuario.'/'.$nnombre;

        $conexion = parent::conectar();

        $sql = "UPDATE carpetas SET car_nombre ='$nnombre' WHERE car_nombre='$vnombre'";
        
        $query = $conexion->prepare($sql);

        if (is_dir($vcarpeta)) {
       
            rename($vcarpeta, $ncarpeta);

            echo $n_usuario;

            header("location:../../modulos/sistema/sgd_carpetas.php");
            }  else {

                echo "No se pudo Editar el nombre";
              
            }
            return $query->execute();
           
        }
        
    public function consultarCarpetas($n_usuario){
        $conexion = parent::conectar();

        $sql = "SELECT * FROM carpetas WHERE n_usuario = '$n_usuario'";

        $query = $conexion->prepare($sql);

        return $query->execute();
    }

   
    


}


?>