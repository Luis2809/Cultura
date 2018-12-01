<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>
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

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnagregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({

				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
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
				url:"procesos/actualizar.php",
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
			url:"procesos/obtenDatos.php",
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
				url:"procesos/eliminar.php",
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
