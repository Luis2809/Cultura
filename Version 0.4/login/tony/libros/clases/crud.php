<?php

class crud{
	public function agregar($datos){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into t_libros (codigo_libro,nombre,autor,edicion,publicacion)
		 values (
		 '$datos[0]',
		 '$datos[1]',
		 '$datos[2]',
		 '$datos[3]',
		 '$datos[4]')";
		 return mysqli_query($conexion,$sql);
	}

	public function obtenDatos($idlibros){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="SELECT id_libros,codigo_libro,nombre,autor,edicion,publicacion from t_libros where id_libros='$idlibros'";
		$result=mysqli_query($conexion,$sql);
		$ver=mysqli_fetch_row($result);

		$datos=array(
			'id_libros' =>$ver[0],
			'codigo_libro' =>$ver[1],
			'nombre' =>$ver[2],
			'autor' =>$ver[3],
			'edicion' =>$ver[4],
			'publicacion' =>$ver[5]
		);
		return $datos;
	}

	public function actualizar($datos){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE t_libros set codigo_libro='$datos[0]',
									nombre='$datos[1]',
									autor='$datos[2]',
									edicion='$datos[3]',
									publicacion='$datos[4]'

					where id_libros='$datos[5]'";

					return mysqli_query($conexion,$sql);
	}

	public function eliminar($idlibros){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="DELETE from t_libros where id_libros='$idlibros'";
		return mysqli_query($conexion,$sql);
	}

}


 ?>