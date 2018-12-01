<?php
require_once "../clases/conexion.php";
require_once "../clases/crud.php";
$obj= new crud();

$datos=array(
	$_POST['codigo_libro'],
	$_POST['nombre'],
	$_POST['autor'],
	$_POST['edicion'],
	$_POST['publicacion']
);

echo $obj->agregar($datos);




?>