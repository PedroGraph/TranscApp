<?php

include("Conexion.php");

$id=$_REQUEST['id'];
$codigo=$_POST['codigo'];
$tipo=$_POST['tipo'];
$placa=$_POST['placa'];
$capacidad=$_POST['capacidad'];

$query="UPDATE buses SET codigo='$codigo', tipo='$tipo', placa='$placa', capacidad='$capacidad' Where codigo='$codigo'";
$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarBuses.php");
}else{
	echo "<script>alert('Los datos no se han modificado. Intente más tarde.');</script>";
}
?>