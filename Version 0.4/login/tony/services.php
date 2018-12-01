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
          <li><a href="index.php">Inicio</a></li>
          <li><a href="about.html">Administradores</a></li>
          <li class="active"><a href="services.php">Libros</a></li>
          <li><a href="works.html">Ayuda</a></li>  
          <li><a href="../php/salir.php">Salir</a></li>  

        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

    <br>
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
            Libros
          </div>
          <div class="card-body">
            <span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
              Agregar nuevo libro <span class="fa fa-plus-circle"></span>
            </span>
            <hr>
            <div id="tablaDatatable"></div>
          </div>
          <div class="card-footer text-muted">
            Registro de libros
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar nuevos libros</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevo">
            <label>Código</label>
            <input type="text" class="form-control input-sm" id="codigo_libro" name="codigo_libro">
            <label>Nombre del libro</label>
            <input type="text" class="form-control input-sm" id="nombre" name="nombre">
            <label>Autor</label>
            <input type="text" class="form-control input-sm" id="autor" name="autor">
            <label>Edición</label>
            <input type="text" class="form-control input-sm" id="edicion" name="edicion">
            <label>Publicación</label>
            <input type="text" class="form-control input-sm" id="publicacion" name="publicacion">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnagregarnuevo" class="btn btn-primary">Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar libro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevoA">
            <input type="text" hidden="" id="idlibros" name="idlibros">
            <label>Código</label>
            <input type="text" class="form-control input-sm" id="codigo_libroA" name="codigo_libroA">
            <label>Nombre del libro</label>
            <input type="text" class="form-control input-sm" id="nombreA" name="nombreA">
            <label>Autor</label>
            <input type="text" class="form-control input-sm" id="autorA" name="autorA">
            <label>Edición</label>
            <input type="text" class="form-control input-sm" id="edicionA" name="edicionA">
            <label>Publicación</label>
            <input type="text" class="form-control input-sm" id="publicacionA" name="publicacionA">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-warning" id="btnactualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>


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
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/spot-bootstrap-freelance-template/
          Licensing information: https://templatemag.com/license/
        -->
      </div>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#btnagregarnuevo').click(function(){
      datos=$('#frmnuevo').serialize();

      $.ajax({

        type:"POST",
        data:datos,
        url:"libros/procesos/agregar.php",
        success:function(r){
          if(r==1){
            $('#frmnuevo')[0].reset();
            $('#tablaDatatable').load('tabla.php');
            alertify.success("Agregado con exito");
          }else{
            alertify.error("Fallo al agregar");
          }

        }

      });
    }); 

    $('#btnactualizar').click(function(){
      datos=$('#frmnuevoA').serialize();

      $.ajax({

        type:"POST",
        data:datos,
        url:"libros/procesos/actualizar.php",
        success:function(r){
          if(r==1){
            
            $('#tablaDatatable').load('tabla.php');
            alertify.success("Actualizado con exito");
          }else{
            alertify.error("Fallo al actualiar");
          }

        }

      });


    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaDatatable').load('tabla.php');
  });
</script>


<script type="text/javascript">
  function agregaFrmActualizar(idlibros){
    $.ajax({
      type:"POST",
      data:"idlibros=" + idlibros,
      url:"libros/Procesos/obtenDatos.php",
      success:function(r){
        datos=jQuery.parseJSON(r);
        $('#idlibros').val(datos['id_libros']);
        $('#codigo_libroA').val(datos['codigo_libro']);
        $('#nombreA').val(datos['nombre']);
        $('#autorA').val(datos['autor']);
        $('#edicionA').val(datos['edicion']);
        $('#publicacionA').val(datos['publicacion']);
      }
    });

  }

  function eliminarDatos(idlibros){
    alertify.confirm('Eliminar un libro', '¿Esta seguro que quiere eliminar este libro?', function(){ 
      $.ajax({
        type:"POST",
        data:"idlibros=" + idlibros,
        url:"libros/procesos/eliminar.php",
        success:function(r){
          if(r==1){
            $('#tablaDatatable').load('tabla.php');
            alertify.success("Eliminado con exito!");
          }else{
            alertify.error("No se puedo eliminar");
          }
        }
      });
    }
    , function(){

    });
  }

</script>

<?php
}else{
    header("location:../index.php");
    }
?>