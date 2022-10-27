<?php

include("Conexion.php");

$codigo=$_REQUEST['codigo'];

$query="DELETE FROM recorrido WHERE codigo='$codigo'";

$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarRecorrido.php");
}else{
	echo "Nada :(
	";
}
?>