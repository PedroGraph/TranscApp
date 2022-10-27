<?php

include("Conexion.php");

$codigo=$_REQUEST['codigo'];
$nombre=$_POST['nombre'];
$nummodulos=$_POST['nummodulos'];
$numtaquillas=$_POST['numtaquillas'];
$horainicio=$_POST['horainicio'];
$horacierre=$_POST['horacierre'];
$estado=$_POST['estado'];


$query="UPDATE estaciones SET nombre='$nombre', nummodulos='$nummodulos', numtaquillas='$numtaquillas', horainicio='$horainicio', horacierre='$horacierre', estado='$estado' Where codigo='$codigo'";
$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarEstaciones.php");
}else{
	echo "<script>alert('Los datos no se han modificado. Intente más tarde.');</script>";
}
?>