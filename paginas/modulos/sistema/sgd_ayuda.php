<?php include "header.php"; ?>
<?php include "navbar.php"; 
      if (!isset($_SESSION['n_usuario'])){
        header("location:sgd_login.php");

      }
?>
<div class="container">
          <div class="row">
          <div class="col l6 s12">
          <h1 class="mt-4">Video tutorial para utilizar el sistema</h1>
          <video src="../../../img/20230320_002741.mp4" controls></video>
          </div>
          </div>
</div>



<?php include "footer.php"; ?>