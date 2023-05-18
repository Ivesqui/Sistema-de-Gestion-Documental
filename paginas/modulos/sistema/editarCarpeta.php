<?php
include "header.php";
include "navbar.php";

require("../../conexion/Conexion.php");

$c = new Conexion();

$conexion = $c->conectar();
                                   
$idCarpeta = $_GET['id_carpeta'];

$sql = $conexion -> query("SELECT * FROM carpetas WHERE id_carpetas = '$idCarpeta'");

$result = $sql->fetch_assoc();
?>

<center>
<div class="container">
         <div class="mt-4 p-5 bg-warning text-white rounded">
        <h1><span class="fa-solid fa-folder-open"></span> Renombrar Carpeta</h1>
        <br><br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 fw-bold fs-3">

              <div class="row">
            <div class="col-sm-4">
                  <form id="frmEditarCar" name="frmEditarCar" action="../../procesos/carpetas/editarCarpeta.php?id_carpeta=<?php echo $result['id_carpetas'];?>" method="POST">
                      <div class="form-group row">
                          <div class="col-sm-8 mb-6 mb-sm-0">
                          </div>
                      </div>
                      
                        
                      <div class="form-group row">
                          <input type="text" class="form-control form-control-user" id="v_nombre"
                          placeholder="Nombre carpeta" required="" name="v_nombre" value="<?php echo $result['car_nombre'];?>" readonly>
                          <input type="text" class="form-control form-control-user" id="n_nombre"
                          placeholder="Ingrese nuevo nombre de carpeta" required="" name="n_nombre" value="">
                          <button class="btn btn-primary btn-block" type="submit">
                          <span class="fa-solid fa-rotate"></span> 
                              Modificar
                          </button> 
                       </div>

                      <div class="col-sm-8 mb-3 mb-sm-0">               
                      </div>
            
                  </form>
              
                        
              </div>
            </div>
        
        </div>                      
                     
</div>

</div>
</div>

</div>

</center>

