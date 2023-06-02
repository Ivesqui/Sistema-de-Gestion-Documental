<?php include "header.php"; ?>

<link href="../../../css/registro/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../../css/librerias/Materialize/materialize.min.css"> 
<style>
  body {
  display: flex;
  min-height: 200vh;
  flex-direction: column;
}
main {
  flex: 1 0 auto;
}

body {
  background: #fff;
}

.email{
  width:50; 
}

.input-field input[type=date]:focus + label,
.input-field input[type=text]:focus + label,
.input-field input[type=email]:focus + label,
.input-field input[type=password]:focus + label {
  color: #1e9fe9;
}
.input-field input[type=date]:focus,
.input-field input[type=text]:focus,
.input-field input[type=email]:focus,
.input-field input[type=password]:focus {
  border-bottom: 2px solid #1e9fe9;
  box-shadow: none;
}
</style>

  <div class="section" magin="0"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="../../../../Proyecto_final/img/std_logo1.png" />
      <div class="section"></div>

      <h6 class="blue-text">Bienvenido, por favor ingrese sus datos</h6>
     

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 20px 48px 30px 48px; border: 1px solid #EEE;">

          <form action="../../procesos/login/logear.php" class="col s12" method="post">

            <div class='row'>
              <div class='col s12'>
              <img class="responsive-img" style="width: 250px;" src="../../../../../Proyecto_final/img/std_documentos2.png" />
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <br></br>
                <input class='form-control' type='text' id='usuario' name='usuario'/>
                <label for='usuario'>Ingrese su Usuario</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              <br></br>
                <input class='form-control' type='password' id='password' name='clave'/>
                <label for='password'>Ingrese su clave</label>
              </div>
            </div>
            
            <div class='row'>
            <label style='float: right;'>
								<a class='blue-text' href='#!'><b>Ha olvidado su clave?</b></a>
							</label>
            </div>
            </br>
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a class="blue-text" href="sgd_registro.php">Crear una cuenta nueva</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <? include "foot.php"; ?>