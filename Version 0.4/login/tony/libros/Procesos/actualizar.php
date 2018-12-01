<?php
require_once "../clases/conexion.php";
require_once "../clases/crud.php";
$obj= new crud();

$datos=array(
	$_POST['codigo_libroA'],
	$_POST['nombreA'],
	$_POST['autorA'],
	$_POST['edicionA'],
	$_POST['publicacionA'],
	$_POST['idlibros']
);

echo $obj->actualizar($datos);




?>