<?php

include("Conexion.php");

$codigo=$_REQUEST['codigo'];
$nombre=$_POST['nombre'];
$nomenclatura=$_POST['nomenclatura'];
$dias_servicio=$_POST['dias_servicio'];
$horario_servicio=$_POST['horario_servicio'];
$tiempo_recorrido=$_POST['tiempo_recorrido'];
$disponibilidad=$_POST['disponibilidad'];

$query="UPDATE recorrido SET codigo='$codigo', nombre='$nombre', nomenclatura='$nomenclatura', dias_servicio='$dias_servicio', horario_servicio='$horario_servicio', tiempo_recorrido='$tiempo_recorrido', disponibilidad='$disponibilidad' Where codigo='$codigo'";
$resultado=$conexion->query($query);

if($resultado){
	header("location: RegistrarRecorrido.php");
}else{
	echo "Nada :(";
}
?>