<?php 
session_start();
session_destroy();
header("location::../../../modulos/sistema/sgd_login.php");
?>