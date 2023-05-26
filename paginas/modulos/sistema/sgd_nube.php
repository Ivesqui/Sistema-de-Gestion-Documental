<?php include "header.php"; ?>
<?php include "btnwsp.php"; ?>
<?php include "navbar.php"; 
      if (!isset($_SESSION['n_usuario'])){
        header("location:sgd_login.php");

      }
?>

<div class="container">
<div class="jumbotron">
<center>
  <h1 class="mt-4">④ Compartir Archivos en el Drive
  </h1>
</center>

<div class="row"> 
                <div class="col-sm-4">
                    <a class="btn btn-success" href="https://drive.google.com/" target="_blank">
                        <span class="fa-brands fa-google-drive">
                        </span> Ingresa a Drive
                    </a>

                    <a class="btn btn-danger" href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=Af_xneHgD_4S1UZiYDmzHjQlu8cmfF7jQFOO-LkFPKVLzEXF1KFmlJSEQxDf1249hVdBsqsUpi-3&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">
                        <span class="fa-solid fa-envelope">
                        </span> Ingresa a Tu Mail
                    </a>

                </div>
            </div>

<?php include "footer.php"; ?>