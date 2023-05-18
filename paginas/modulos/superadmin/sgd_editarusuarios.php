<?php 
session_start();
include "footer.php";
include "header.php";
?>
<!-- Page Content -->




  <form action="" method="POST">
  <div id="login">
  <div class="container">
  <div class="jumbotron">
  <div id="login row" class="row justify-content-center align-items-center"> 
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <center>
                    <br>
                    <br>
                    <h1 class="mt-4">Edición de Usuarios</h1>
                    <hr>
                    </center>
                    <div class="form-group">
                        <label for="nombres" class="form-label">Nombres: </label>
                        <input type="text" id="nombres" name="nombres" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos" class="form-label">Apellidos: </label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos" class="form-label">Contraseña: </label>
                        <input type="password" id="clave" name="clave" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="clave" class="form-label">Contraseña: </label>
                        <input type="password" id="clave" name="clave" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="rol" class="form-label">Rol: </label>
                        <input type="number" id="rol" name="rol" class="form-control" required placeholder="1 administrador, 2 Usuario Regular">
                    </div>
                
                    </div>
                </div>
            </div>
   </div>
</div>
</div>
</form>