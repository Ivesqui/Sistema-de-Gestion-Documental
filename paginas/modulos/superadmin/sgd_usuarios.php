<?php 
session_start();
include "footer.php";
include "header.php";
?>
<!-- Page Content -->
<div class="container">
<div class="jumbotron">
<center>
  <h1 class="mt-4">Gestión de Usuarios
  </h1>
</center>

  <div class="row"> 
                <div class="col-sm-4">
                <a class="btn btn-danger btn-small" 
                        href="usuarios/salir.php">
                            <span class="fa-solid fa-arrow-right-from-bracket">
                            </span>
                            Salir
                        </a>
                </div>
            </div>
    <hr>
    <div id="tablaUsuarios"></div>
  </p>
</div>
</div>  

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaUsuarios').load("usuarios/tablaUsuarios.php");      
    });
</script>
