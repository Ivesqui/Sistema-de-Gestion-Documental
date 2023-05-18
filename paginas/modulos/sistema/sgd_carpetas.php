<?php include "header.php"; ?>

<?php include "navbar.php"; 
      if (!isset($_SESSION['n_usuario'])){
        header("location:sgd_login.php");

      }
?>


      <!-- Page Content -->
<div class="container">
<div class="jumbotron">
  <center>
    <h1 class="mt-4">
    ① Carpetas de Usuario
    </h1>
  </center>

  <br></br>
        <div class="row"> 
                <div class="col-sm-4">
                </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                  <form id="frmRegistro" name="frmRegistro" action="../../procesos/carpetas/agregarCarpeta.php" method="post">
                      <div class="form-group row">
                          <div class="col-sm-12 mb-6 mb-sm-0">
                              <h5>
                                Datos de Carpeta:
                                <hr>
                              </h5>
                          </div>
                          
                      </div>
                        
                      <div class="form-group row">
                          <input type="text" class="form-control form-control-user" id="car_nombre"
                          placeholder="Nombre carpeta" required="" name="car_nombre">
                          <p><br></p>
                          <button class="btn btn-primary btn-block" type="submit">
                          <span class="fa-solid fa-plus"></span> 
                              Agregar nueva carpeta
                          </button> 
                       </div>

                      <div class="col-sm-8 mb-3 mb-sm-0">               
                      </div>
            
                  </form>

           
            </div>
            <div class="col-sm-8">
                <div id="tablaCarpetas">    
                </div>
            </div>
        </div>
</div>
</div>  

<?php include "footer.php"; ?>

<script src="../../../js/carpetas.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaCarpetas').load("../carpetas/tablaCarpetas.php");      
    });
</script>



