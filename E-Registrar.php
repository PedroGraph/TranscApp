<?php

include("Conexion.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$num_modulos=$_POST['num_modulos'];
$num_taquillas=$_POST['num_taquillas'];
$horainicio=$_POST['horainicio'];
$horacierre=$_POST['horacierre'];
$estado=$_POST['estado'];

$query="INSERT INTO estaciones (codigo, nombre, num_modulos, num_taquillas, horainicio, horacierre, estado) VALUES ('$codigo','$nombre','$num_modulos','$num_taquillas','$horainicio','$horacierre','$estado')";

$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarEstaciones.php");
}else{
	echo "Nada :(
	";
}
?>