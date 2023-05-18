<!--
PROYECTO: 0001_STD
EMPRESA: STD S.A
PROCESO: ARCHIVO PHP QUE CONTIENE LA VISTA PRINCIPAL O INDEX
RECURSO: VIVIANA SAMANTHA MORALES PAREDES
-->


<!-- HEADER -->
<?php include "head.php"; ?>

<body>
        <nav class="cyan darken-1" role="navigation">
            <div class="nav-wrapper container">
                <a class="sidebar-brand d-flex align-items-center justify-content-between" href="vistas/sgd_inicio.html">
                  <div class="sidebar-brand-icon rotate-n-18">
                      <img src="../../img/std_logo2.png" alt="" height="60px" width="150px"> 
                  </div>
                </a>
            </div>
        </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
        <h1 class="header center cyan-text">
        Sistemas de Tratamiento Documental
        </h1>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="row center">
          <h5 class="header col s12 light"> Sistema de Información para la gestión de los documentos externos recibidos por una entidad, como también de aquellos que la entidad genera internamente.</h5>
          <br><br>
        </div>
    </div>
  </div>

<footer class="page-footer light-blue accent-2">
  <center>
      <div class="section">
        <img src="../../img/std_documentos.jpg" alt="" height="450" width="1050px">
      </div>
  </center>
</footer> 

<div class="container">
  <div class="section">
    <div class="row">

      <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">folder</i></h2>
            <h5 class="center">Quienes Somos</h5>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <p class="light">STD es una empresa que se dedicaba al servicio informático de gestión de la documentación.</p>
            <p class="light">En ella se utilizan modernos métodos de gestión y digitalización documental, 
                      que van de la mano con los tradicionales de microfilmación,para adaptarse al gusto y las necesidades de cualquier tipo de cliente.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Experiencia del Cliente</h5>
            
            <!-- Divider -->
                <hr class="sidebar-divider">

                  <p class="light">Entre nuestras líneas de trabajo, nuestros clientes pueden encontrar:
                    <ul>
                      <li>Consultoría Documental</li>
                      <li>Digitalización</li>
                      <li>Archivos</li>
                      <li>Software para Gestión Documental</li>
                    </ul>
                  </p>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                  <h5 class="center">Política de Calidad</h5>

                  <!-- Divider -->
                <hr class="sidebar-divider">

                  <p class="light">Tiene como pilar principal la profesionalidad de cada uno de los técnicos que conforman nuestro equipo.
                     Dicha profesionalidad permite la realización del tratamiento digital específico que cada trabajo requiere, realizado con el menor costo de tiempo posible. 
                    
                    Con todo: profesionalidad y flexibilidad, conseguimos dar a nuestros clientes el mejor servicio con la máxima calidad.</p>
                </div>
              </div>
      </div>
  </div>  
</div>

<style>
    .container_btn{
      margin: 5%;

      display: flex;
      justify-content: center;
      align-items: center;
    }

    .row_btn{
      flex-direction: row;
      justify-content: center;
      align-items: center;
      display: flex;
    }

    .btn-regis{
      margin: 2%;
      width: 200px !important;
      height: 40;
      background-color: #008D94;
      
    }

    .btn-inic{
      margin: 2%;
      width: 200px !important;
      height: 40;
      background-color: #008D94;
    }
  </style>

 <div class="container">
 <hr class="sidebar-divider">
    <div class="container_btn">
      <div class="row_btn">
          <div class="col s4">
            <img src="../../img/std_bienvenido.png" alt="" height="320px"> 
          </div>
          <div class="col s4">
            <h5 class="center">Es hora de dar el primer paso!</h5>
            <h5 class="center">Regístrate o Inicia Sesión</h5>
          </div>
          <div class="col s4">
          <a href="sistema/sgd_registro.php" class="btn btn-primary btn-regis">
            Registrarse</a>
          <a href="sistema/sgd_login.php" class="btn btn-danger btn-inic">
          Iniciar Sesión</a>
          </div>
  </div>
    </div>
  </div>
</div>

   

      <footer class="page-footer cyan darken-1">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <div class="sidebar-brand-icon rotate-n-18">
                <img src="../../img/std_logo1.png" alt="" height="70px" width="150px"> 
                <h5 class="white-text">Acerca de STD</h5>
              <p class="grey-text text-lighten-4">Sistemas de Tratamiento Documental</p>
              <p class="grey-text text-lighten-4"> La automatización del procesamiento de datos es el mejor enfoque cuando tratamos de procesar datos de la manera más eficiente y rentable mientras se minimizan los errores.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright cyan darken-1">
          <div class="container"></div>
        </div>
      </footer>

<?php include "foot.php"; ?>

