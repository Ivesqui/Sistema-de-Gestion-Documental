<?php 
include "../../conexion/Conexion.php";


class Categorias extends Conexion{

    public function registrarCategorias($nombreCarpeta, $nombreCategoria) {
        $conexion = parent::conectar();

        $sql = "INSERT INTO categorias(car_nombre,cat_nombre) 
                VALUES(?, ?)";

        $query = $conexion->prepare($sql);
        $query->bind_param('ss', $nombreCarpeta, $nombreCategoria);

        return $query->execute();
   
    }

    public function eliminarCategorias($idCategorias){
        $conexion = parent::conectar();

        $sql = "DELETE FROM categorias
                WHERE id_categorias = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $idCategorias);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;

    }

    public function obtenNombreCarpeta($n_usuario) {
        $conexion = parent::conectar();
        $sql = "SELECT car_nombre 
                FROM carpetas
                WHERE n_usuario = '$n_usuario'";
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_array($result)['car_nombre'];
    }

    public function obtenerCategorias($idCategorias) {
        $conexion = parent::conectar();

        $sql = "SELECT id_categorias, cat_nombre 
                FROM categorias 
                WHERE id_categorias = '$idCategorias'";

        $result = mysqli_query($conexion, $sql);
        $categoria =  mysqli_fetch_array($result);

        $datos = array(
            "idCategoria" => $categoria['id_categorias'],
            "nombreCategorias" => $categoria['cat_nombre']
        );
        return $datos;
    }

    public function actualizarCategorias($datos) {
        $conexion = parent::conectar();

        $sql = "UPDATE categorias 
                SET cat_nombre = ? 
                WHERE id_categorias = ?";

        $query = $conexion->prepare($sql);
        $query->bind_param("si", $datos['categoria'], 
                                 $datos['idCategoria']);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;

    }

    }

    
    





?>