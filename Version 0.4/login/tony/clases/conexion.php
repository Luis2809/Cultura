

<?php 

class conectar {
	public function conexion(){
		$conexion=mysqli_connect('localhost','root','','juegos');
		mysqli_set_charset($conexion,"utf8");

		 return $conexion;
	}
}


?>