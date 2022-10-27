<?php

include("Conexion.php");

$id=$_REQUEST['id'];

$query="DELETE FROM buses WHERE id='$id'";

$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarBuses.php");
}else{
	echo "Nada :(
	";
}
?>