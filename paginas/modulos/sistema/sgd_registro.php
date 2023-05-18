<!-- HEADER -->
<?php include "header.php"; ?>
<!-- hoja de estilos registro -->
<link href="../../../css/registro/sb-admin-2.min.css" rel="stylesheet">
<body class="bg-gradient-info">


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="../../../img/std_registro.png" alt="" height="400px" width="500px">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Crea una cuenta!</h1>
                            </div>
                            <form id="frmRegistro" name="frmRegistro" action="../../procesos/registro/registrar.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombres"
                                            placeholder="Nombres" required="" name="nombres">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="apellidos"
                                            placeholder="apellidos" required="" name="apellidos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="usuario"
                                            placeholder="Usuario" name="usuario" required="">
                                    </div>
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="clave" placeholder="Contraseña" required="" name="clave">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">
                                    Registrar una Cuenta
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="sgd_login.php"> ¿Ya tienes una cuenta? ¡Accede a ella!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../../js/librerias/jquery/jquery-3.6.3.min.js"></script>
    
    <?php include "../foot.php"; ?>
