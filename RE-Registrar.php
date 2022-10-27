<?php

include("Conexion.php");

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$codigo_estacion=$_POST['codigo_estacion'];
$codigo_recorrido=$_POST['codigo_recorrido'];

$query="INSERT INTO buses (codigo, nombre, codigo_estacion, codigo_recorrido) VALUES ('$codigo','$nombre','$codigo_estacion','$codigo_recorrido')";

$resultado=$conexion->query($query);

if($resultado){
	header("location: Registrar_RecorridoEstacion.php");
}else{
	echo "Nada :(
	";
}
?>