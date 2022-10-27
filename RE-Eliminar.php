<?php

include("Conexion.php");

$codigo=$_REQUEST['codigo'];

$query="DELETE FROM buses WHERE codigo='$codigo'";

$resultado=$conexion->query($query);

if($resultado){
	header("location: Registrar_RecorridoEstacion.php");
}else{
	echo "Nada :(
	";
}
?>