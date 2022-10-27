<?php

include("Conexion.php");

$codigo=$_REQUEST['codigo'];

$query="DELETE FROM estaciones WHERE codigo='$codigo'";

$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarEstaciones.php");
}else{
	echo "Nada :(
	";
}
?>