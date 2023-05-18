<?php include "header.php";

      include "navbar.php";
      if (!isset($_SESSION['n_usuario'])){
        header("location:sgd_login.php");

      }
         

include "footer.php";

?>


<!-- Page Content -->
<div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1><span class="fa-solid fa-chart-line"></span> Dashboard general </h1>
        <br><br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 fw-bold fs-3">
              
                        </div>

                        <div class="row">

                        <div class="col-md-3">
                            <div class="card text-dark bg-info mb-3 text-center" style="max-width: 18rem;">
                                <div class="card-header rounded"><h6>Usuarios Registrados</h6></div>
                                          <div class="card-body rounded">
                                          <h1 class="card-title">

                                          <?php
                                          require_once "../../conexion/Conexion.php";
                                          $c = new Conexion();
                                          $conexion = $c->conectar();
                                          $con = $conexion; 
                                          $count2 = current($con->query("SELECT COUNT(*)FROM usuario")->fetch_assoc());
                                          ?>
                                          
                                          <span class="fa-solid fa-user"></span> <p><?php echo "".$count2;?></p></h1>
                                          </div>
                            </div>
                          </div>

                                                                      
                        <div class="col-md-3">
                            <div class="card text-dark bg-success mb-3 text-white text-center" style="max-width: 18rem;">
                                <div class="card-header rounded"><h6>Carpetas creadas</h6></div>
                                          <div class="card-body rounded">
                                          <h1 class="card-title">
                                          
                                          <?php 
                                          $count3 = current($con->query("SELECT COUNT(*)FROM carpetas")->fetch_assoc());
                                          ?>  
                                          
                                          
                                          <span class="fa-solid fa-folder-open"></span> <p><?php echo "".$count3;?></p></h1>
                                          </div>
                            </div>
                        </div>

                                                <div class="col-md-3">
                            <div class="card text-dark bg-warning mb-3 text-center" style="max-width: 18rem;">
                                <div class="card-header rounded">
                                  <h6>Documentos Subidos</h6>
                                </div>
                                      <div class="card-body rounded">
                                      <h1 class="card-title">

                                      <?php
                                          $count1 = current($con->query("SELECT COUNT(*)FROM documentos")->fetch_assoc());
                                       ?>  



                                      <span class="fa-solid fa-file"></span>  <p><?php echo "".$count1;?></p> </h1>
                                      </div>
                            </div>
                          </div>

                          <div class="col-md-3 p-4">
                          <img src="../../../img/std_inicio.png" height="200" width="200">
                        </div>

              </div>
            </div>
          </div>







