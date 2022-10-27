<?php

include("Conexion.php");

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$nomenclatura=$_POST['nomenclatura'];
$dias_servicio=$_POST['dias_servicio'];
$horario_servicio=$_POST['horario_servicio'];
$tiempo_recorrido=$_POST['tiempo_recorrido'];
$disponibilidad=$_POST['disponibilidad'];


$query="INSERT INTO recorrido (codigo, nombre, nomenclatura, dias_servivcio, horario_servicio, tiempo_recorrido, disponibilidad) VALUES ('$codigo','$nombre','$nomenclatura','$dias_servicio','$horario_servicio','$tiempo_recorrido','$disponibilidad')";

$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarBuses.php");
}else{
	echo "Nada :(
	";
}
?>