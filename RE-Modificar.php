<?php

include("Conexion.php");

$codigo=$_REQUEST['codigo'];
$nombre=$_POST['nombre'];
$codigo_estacion=$_POST['codigo_estacion'];
$codigo_recorrido=$_POST['codigo_recorrido'];

$query="UPDATE buses SET nombre='$nombre', codigo_estacion='$codigo_estacion', codigo_recorrido='$codigo_recorrido' Where codigo='$codigo'";
$resultado=$conexion->query($query);

if($resultado){
	header("location: Registrar_RecorridoEstacion.php");
}else{
	echo "<script>alert('Los datos no se han modificado. Intente más tarde.');</script>";
}
?>