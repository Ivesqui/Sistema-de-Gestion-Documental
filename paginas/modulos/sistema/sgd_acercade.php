<?php include "header.php"; ?>

<?php include "navbar.php"; 
      if (!isset($_SESSION['n_usuario'])){
      header("location:sgd_login.php");
      }
?>

<div class="container">
          <div class="row">
            <div class="col l6 s12">
              <div class="sidebar-brand-icon rotate-n-18">
                  <br>
                <img src="../../../img/std_logo1.png" alt="" height="70px" width="150px"> 
                <hr>
                
                <h4 class="display-6"><strong>Acerca de STD</strong></h4>
              <h6 class=""><strong>Sistemas de Tratamiento Documental</strong></h6>
              <h6 class=""> La automatización del procesamiento de datos es el mejor enfoque cuando tratamos de procesar datos de la manera más eficiente y rentable mientras se minimizan los errores.</h6>
              <p>Este proyecto fue desarrollado por estudiantes de 5to Semestre "C" del Instituto Superior Tecnológico Guayaquil, en la materia de: Tendencias actuales de programación </p>
              <hr>
              <h6 class="">Integrantes:</h6>
              <ul class="list-group">
              <li class="list-group-item">Wilmer Castro</li>
              <li class="list-group-item">Olga Gonzáles</li>
              <li class="list-group-item">Pedro Mera</li>
              <li class="list-group-item">Christian Estupiñan</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright cyan darken-1">
          <div class="container"></div>
        </div>



<?php include "footer.php";
?>