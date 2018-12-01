

<?php

    session_start(); 
    if(isset($_SESSION['user'])){

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Biblioteca Online Administracion</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Spot
    Template URL: https://templatemag.com/spot-bootstrap-freelance-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">Administracion</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="about.html">Administradores</a></li>
          <li><a href="services.php">Libros</a></li>
          <li><a href="works.html">Ayuda</a></li>  
          <li><a href="../php/salir.php">Salir</a></li>  
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Bienvenido a la herramienta <strong><?php echo $_SESSION['user']?> </strong></h1>
          <h2>de la casa de la cultura de usulutan</h2>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- headerwrap -->

  <div class="container w">
    <div class="row centered">
      <br><br>
      <div class="col-lg-4">
        <i class="fa fa-heart"></i>
        <h4>Mision</h4>
        <p>El Ministerio de Cultura asegura el derecho a la cultura y al fortalecimiento de las identidades salvadoreñas, ejecutando la rectoría de la protección, conservación, difusión del patrimonio cultural y las expresiones artísticas.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
        <i class="fa fa-laptop"></i>
        <h4>Vision</h4>
        <p>Ser la institución que garantiza el derecho a la cultura como factor de identidad y cambio social.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
        <i class="fa fa-trophy"></i>
        <h4>Presentacion</h4>
        <p>El Ministerio de Cultura no es únicamente resultado de una decisión gubernamental, sino de la evolución de una política cultural nacional, que tiene en cuenta lo más autóctono de los pueblos originarios y cada comunidad del país”, presidente Salvador Sánchez Cerén (Discurso de oficialización del Ministerio de Cultura, 19 de abril de 2018)</p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
    <br>
    <br>
  </div>
  <!-- container -->

  <!-- FOOTER -->
  <div id="f">
    <div class="container">
      <div class="row centered">
      <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4" style="color:white">Direccion</h4>
            <p class="lead mb-0" style="color:white">Avenida Gregorio Melara, # 1. Barrio El Calvario, Usulután</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4" style="color:white">Redes sociales</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/Casa-de-la-cultura-de-Usulut%C3%A1n-168669987318900/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/channel/UCvAhjQG_xmseuTQZDfdWolA" target="_blank">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4" style="color:white">Información</h4>
            <p class="lead mb-0" style="color:white">En este aplicativo podras crear usuario y eliminarlos, tambien tendras las opcion de administrar los libros disponibles (agregar libro, editar su informacion y eliminarlos)</p>
          </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- Footer -->


  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Derechos reservados Casa de cultura 2018
      </p>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

<?php
}else{
    header("location:../index.php");
    }
?>