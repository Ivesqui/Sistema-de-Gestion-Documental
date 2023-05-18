<?php session_start()
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
<div class="container">
<a class="navbar-brand" href="#">
<img src="../../../../Proyecto_final/img/std_logo2.png" alt="..." height="46" href="sgd_principal.php">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link active" href="#"></span>
</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="sgd_inicio.php"><span class="fa-solid fa-house-user"></span> Inicio</a>
</li>
<li class="nav-item">
<a class="nav-link" href="sgd_carpetas.php"><span class="fa-solid fa-folder-open"></span> Carpetas</a>
</li>
<li class="nav-item">
<a class="nav-link" href="sgd_categorias.php"><span class="fa-brands fa-elementor"></span> Categorías</a>
</li>
<li class="nav-item">
<a class="nav-link" href="sgd_gestor.php"><span class="fa-solid fa-file"></span> Archivos</a>
</li>
<li class="nav-item">
<a class="nav-link" href="sgd_nube.php"><span class="fa-solid fa-cloud"></span> Nube Compartida</a>
</li>
<li class="nav-item">
<a class="nav-link" href="sgd_reportes.php"><span class="fa-solid fa-chart-pie"></span>Reporte de Documentos</a>
</li>
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="fa-solid fa-user"></span>
          Usuario: <?php echo $_SESSION['n_usuario'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="nav-link" href="../../procesos/salir.php"  style="color:blue"><span class="fa-solid fa-door-open"></span> Salir</a>
</li>
            <li><a class="dropdown-item" href="sgd_ayuda.php"><span class="fa-solid fa-circle-question"></span> Ayuda</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="sgd_acercade.php"><span class="fa-solid fa-address-card"></span> Acerca de</a></li>
</div>
</div>
</nav>

