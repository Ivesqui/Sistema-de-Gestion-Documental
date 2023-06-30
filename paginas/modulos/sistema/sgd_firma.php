<?php include "header.php";

      include "navbar.php";
      if (!isset($_SESSION['n_usuario'])){
        header("location:sgd_login.php");

      }
         

include "footer.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>Solicitar firma de usuario</title>
  <style>
  /* Estilos del contenedor de firma */
  .firma-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .firma-container h1 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
  }

  .firma-container p {
    font-size: 16px;
    margin-bottom: 10px;
    color: #555;
  }

  .firma-container canvas {
    display: block;
    margin: 0 auto;
    border: 1px solid #ccc;
    cursor: crosshair;
  }

  .firma-container button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: #fff;
    cursor: pointer;
    margin-top: 10px;
  }

  .firma-container button:hover {
    background-color: #45a049;
  }
</style>

<div class="firma-container">
  <h1>Solicitar firma de usuario</h1>
  <p>Firmar a continuación:</p>
  <canvas id="canvas"></canvas>
  <button id="btnLimpiar">Limpiar</button>
  <button id="btnDescargar">Descargar</button>
  <button id="btnGenerarDocumento">Pasar a documento</button>
</div>



 <script>

const $canvas = document.querySelector("#canvas"),
  $btnDescargar = document.querySelector("#btnDescargar"),
  $btnLimpiar = document.querySelector("#btnLimpiar"),
  $btnGenerarDocumento = document.querySelector("#btnGenerarDocumento");
const contexto = $canvas.getContext("2d");
const COLOR_PINCEL = "black";
const COLOR_FONDO = "white";
const GROSOR = 0;
let xAnterior = 50,
  yAnterior = 0,
  xActual = 0,
  yActual = 0;
const obtenerXReal = (clientX) =>
  clientX - $canvas.getBoundingClientRect().left;
const obtenerYReal = (clientY) =>
  clientY - $canvas.getBoundingClientRect().top;
let haComenzadoDibujo = false;

const limpiarCanvas = () => {
  contexto.fillStyle = COLOR_FONDO;
  contexto.fillRect(0, 0, $canvas.width, $canvas.height);
};
limpiarCanvas();
$btnLimpiar.onclick = limpiarCanvas;

// Escuchar clic del botón para descargar el canvas
$btnDescargar.onclick = () => {
  const enlace = document.createElement("a");
  // El título
  enlace.download = "Firma.png";
  // Convertir la imagen a Base64 y ponerlo en el enlace
  enlace.href = $canvas.toDataURL();
  // Hacer click en él
  enlace.click();
};
window.obtenerImagen = () => {
  return $canvas.toDataURL();
};

$btnGenerarDocumento.onclick = () => {
    window.open("firma-documento.php");
  };
  

$canvas.addEventListener("mousedown", (evento) => {
  // En este evento solo se ha iniciado el clic, así que dibujamos un punto
  xAnterior = xActual;
  yAnterior = yActual;
  xActual = obtenerXReal(evento.clientX);
  yActual = obtenerYReal(evento.clientY);
  contexto.beginPath();
  contexto.fillStyle = COLOR_PINCEL;
  contexto.fillRect(xActual, yActual, GROSOR, GROSOR);
  contexto.closePath();
  // Y establecemos la bandera
  haComenzadoDibujo = true;
});

$canvas.addEventListener("mousemove", (evento) => {
  if (!haComenzadoDibujo) {
    return;
  }
  // El mouse se está moviendo y el usuario está presionando el botón, así que dibujamos todo

  xAnterior = xActual;
  yAnterior = yActual;
  xActual = obtenerXReal(evento.clientX);
  yActual = obtenerYReal(evento.clientY);
  contexto.beginPath();
  contexto.moveTo(xAnterior, yAnterior);
  contexto.lineTo(xActual, yActual);
  contexto.strokeStyle = COLOR_PINCEL;
  contexto.lineWidth = GROSOR;
  contexto.stroke();
  contexto.closePath();
});

["mouseup", "mouseout"].forEach((nombreDeEvento) => {
  $canvas.addEventListener(nombreDeEvento, () => {
    haComenzadoDibujo = false;
  });
});
</script>
</body>
</html>