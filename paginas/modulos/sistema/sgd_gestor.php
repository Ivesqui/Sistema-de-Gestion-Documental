<?php include "header.php"; ?>

<?php include "navbar.php"; 
      if (!isset($_SESSION['n_usuario'])){
        header("location:sgd_login.php");

      }
      require_once "../../conexion/Conexion.php";
?>
<div class="container">
<div class="jumbotron">
<center>
  <h1 class="mt-4">③ Documentos de Usuario
  </h1>
</center>

  <div class="row"> 
                <div class="col-sm-4">
                    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
                        <span class="fa-solid fa-plus"></span> Agregar nuevo documento
                    </span>
                </div>
            </div>
    <hr>
    <div id="tablaGestorArchivos"></div>
  </p>
</div>
</div> 
 
<?php include "footer.php"; ?>

<script src="../../../js/gestor.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaGestorArchivos').load("../gestor/tablaGestor.php"); 
        $('#carpetasLoad').load("../carpetas/selectCarpetas.php");
        $('#categoriasLoad').load("../categorias/selectCategorias.php");         
        $('#btnGuardarArchivos').click(function(){
        agregarArchivos();  
        });
    });
</script>







<!-- Modal Agregar Archivos-->
<div class="modal fade" id="modalAgregarArchivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Documento</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
        <form action="" id="frmArchivos" enctype="multipart/form-data" method="POST">
          <label for="">Seleccione Carpeta de Destino</label>
          <div id="carpetasLoad"></div>
          <hr>
          <label for="">Seleccione Categoría de Documento</label>
          <div id="categoriasLoad"></div>
          <hr>
          <label for="">Seleccione el Archivo</label>
          <input type="file" name="archivos[]" id="archivos[]" class="form-control" multiple="">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarArchivos">Guardar Archivo</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Visualizar Archivos-->
<div class="modal fade bd-example-modal-lg" id="visualizarArchivo" tabindex="-1" role="dialog" aria-labelledby="visualizarArchivoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="visualizarArchivoLabel">Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
        <div id="archivoObtenido"></div></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

