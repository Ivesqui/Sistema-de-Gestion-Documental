<?php 
include "header.php";?>

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
    ② Categorías de Documentos de Usuario
    </h1>
  </center>

  <br></br>
        <div class="row"> 
                <div class="col-sm-4">
                </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                  <form id="frmCategoria" name="frmCategoria" action="../../procesos/categorias/agregarCategorias.php" method="post">
                      <div class="form-group row">
                          <div class="col-sm-12 mb-6 mb-sm-0">
                              <h5>
                                Datos de Categoría:
                                <hr>
                              </h5>
                          </div>
                          
                      </div>
                        
                      <div class="form-group row">
                      <label for="">Seleccione Carpeta Contenedora</label>
                        <div id="carpetasLoad" name="car_nombre"></div>
                        <p><br></p>
                        <hr>
                      <label for="">Escriba el Nombre de la Categoria</label>
                          <input type="text" class="form-control form-control-user" id="cat_nombre"
                          placeholder="Nombre categoria" required="" name="cat_nombre">
                          <p><br></p>
              
                          <button class="btn btn-primary btn-block" type="submit">
                          <span class="fa-solid fa-plus"></span> 
                              Agregar nueva categoría
                          </button> 
                       </div>

                      <div class="col-sm-8 mb-3 mb-sm-0">               
                      </div>
            
                  </form>

           
            </div>
            <div class="col-sm-8">
                <div id="tablaCategorias">    
                </div>
            </div>
        </div>
</div>
</div>  


<?php include "footer.php";?>


<script src="../../../js/categorias.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaCategorias').load("../categorias/tablaCategorias.php");
        $('#carpetasLoad').load("../carpetas/selectCarpetas.php");
        $('#btnActualizarCategoria').click(function(){
          actualizarCategorias()
        });      
    });
</script>

<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categorías</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarCategoria">
        <input type="text" id="idCategoria" name="idCategoria" hidden="">
        <label for="">Categoría: </label>
        <input type="text" id="categoriaU" name="categoriaU" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarCategoria">Actualizar</button>
      </div>
    </div>
  </div>
</div>



