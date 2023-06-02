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

                        <div class="col-md-3">
                            <div class="card text-dark bg-danger mb-3 text-white text-center" style="max-width: 18rem;">
                            <div class="card-header rounded"><h6>Hora del Sistema</h6></div>
                                          <div class="card-body rounded">
                                          <h1 class="card-title">
                                          
                                          <?php 
                                          $api_url = 'http://worldtimeapi.org/api/ip'; // Utiliza la IP del usuario para obtener la hora actual

                                          // Realiza la solicitud a la API
                                          $response = file_get_contents($api_url);
                                          
                                          // Decodifica la respuesta JSON
                                          $data = json_decode($response);
                                          
                                          // Extrae la información de la fecha y hora
                                          $datetime = new DateTime($data->datetime);
                                          $timezone = new DateTimeZone($data->timezone);
                                          
                                          // Establece la zona hora
                                          $datetime->setTimezone($timezone);

                                          ?> 
                                          <span class="fa-solid fa-clock"></span>
                                          <p><?php echo $datetime->format('H:i:s');?></p></h1>
                                          </div>
                            </div>
                        </div>

                        
                        <div class="col-md-3">
                            <div class="card text-dark bg-info mb-3 text-center" style="max-width: 18rem;">
                                <div class="card-header rounded">
                                  <h6>Clima</h6>
                                </div>
                                      <div class="card-body rounded">
                                      <h1 class="card-title">

                                      <?php
                                          $api_key = '75af4c4cb01558bce8a22bca8a11f8d0'; // Reemplaza 'TU_API_KEY' con tu clave de API de OpenWeatherMap
                                          $city = 'Guayaquil'; // Reemplaza 'NOMBRE_DE_LA_CIUDAD' con el nombre de la ciudad para la que deseas obtener el clima
                                          
                                          // URL de la API para obtener el clima actual
                                          $api_url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
                                          
                                          // Realiza la solicitud a la API
                                          $response = file_get_contents($api_url);
                                          
                                          // Decodifica la respuesta JSON
                                          $data = json_decode($response);
                                          
                                          // Extrae la temperatura y el código de icono del clima
                                          $temperature = $data->main->temp;
                                          $icon_code = $data->weather[0]->icon;
                                          
                                          // Construye la URL del icono del clima
                                          $icon_url = "http://openweathermap.org/img/w/$icon_code.png";
                                       ?>  



                                      <p><?php echo 'Temperatura: ' . round($temperature - 273.15) . '°C<br>';
echo '<img src="' . $icon_url . '" alt="Clima">';?></p> </h1>
                                      </div>
                            </div>
                          </div>


              </div>
            </div>
          </div>







