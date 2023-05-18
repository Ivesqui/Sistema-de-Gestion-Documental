<?php 
    session_start();
    require_once "../../conexion/Conexion.php";
    $c = new Conexion();
    $conexion = $c->conectar();

    $n_usuario = $_SESSION['n_usuario'];
    $sql = "SELECT cat_nombre AS nombreCategoria,
    insert_categoria AS fechaInsert,
    id_categorias AS idCategorias
    FROM categorias 
    INNER JOIN carpetas AS carpetas
    ON categorias.`car_nombre`= carpetas.`car_nombre`
    WHERE n_usuario = '$n_usuario'";

    $result = mysqli_query($conexion, $sql);

?>

<select name="categoriasArchivos" id="categoriasArchivos" class="form-control">

<?php
    while($mostrar = mysqli_fetch_array($result)){
    $idCategorias = $mostrar['nombreCategoria']; 
?>
    <option value="<?php echo $idCategorias ?>">
    <?php echo $mostrar['nombreCategoria']?>
    </option>
<?php 
    } 
?>