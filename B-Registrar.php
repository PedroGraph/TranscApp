<?php

include("Conexion.php");

$codigo=$_POST['codigo'];
$tipo=$_POST['tipo'];
$placa=$_POST['placa'];
$capacidad=$_POST['capacidad'];

$query="INSERT INTO buses (codigo, tipo, placa, capacidad) VALUES ('$codigo','$tipo','$placa','$capacidad')";

$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarBuses.php");
}else{
	echo "Nada :(
	";
}

$query="INSERT INTO notifications (codigo, tipo, placa, capacidad) VALUES ('$codigo','$tipo','$placa','$capacidad')";

?>