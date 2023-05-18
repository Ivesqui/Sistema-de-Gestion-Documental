<?php 
    session_start();
    require_once "../../conexion/Conexion.php";
    $c = new Conexion();
    $conexion = $c->conectar();

    $n_usuario = $_SESSION['n_usuario'];
    $sql = "SELECT id_carpetas, car_nombre FROM carpetas WHERE n_usuario = '$n_usuario'";

    $result = mysqli_query($conexion, $sql);


?>

<select name="carpetasArchivos" id="carpetasArchivos" class="form-control">

<?php
    while($mostrar = mysqli_fetch_array($result)){
    $idCarpetas = $mostrar['car_nombre']; 
?>
    <option value="<?php echo $idCarpetas ?>">
    <?php echo $mostrar['car_nombre']?>
    </option>
<?php 
    } 
?>


</select>