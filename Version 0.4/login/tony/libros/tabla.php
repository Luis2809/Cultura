<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT id_libros,codigo_libro,nombre,autor,edicion,publicacion from t_libros";
$result=mysqli_query($conexion,$sql);

?>

<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white;font-weight:bold;">
			<tr>
				<td>Codigo</td>
				<td>Nombre del libro</td>
				<td>Autor</td>
				<td>Edicion</td>
				<td>Publicacion</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white;font-weight:bold;">
			<tr>
				<td>Codigo</td>
				<td>Nombre del libro</td>
				<td>Autor</td>
				<td>Edicion</td>
				<td>Publicacion</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody style="background-color: white">
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaleditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class= "fa fa-edit"></span>
						</span>
					</td>
					<td style="text-align: center;">				
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
							<span class= "fa fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>

		</tbody>
	</table>
</div>

<script type="text/javascript">
	$('#iddatatable').DataTable({ language:{ url: '//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json' } });
</script>