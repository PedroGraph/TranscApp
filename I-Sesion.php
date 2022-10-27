<?php

$con = new mysqli("localhost", "root", "", "transcaribe");

if(!empty($_POST)){

}

$user=$_POST['user'];
$pass=$_POST['pass'];

$query= $con->query("SELECT * FROM login WHERE user='$user' AND pass= MD5($pass)"); 
if($query->num_rows>0){
	while($row = mysqli_fetch_array($rs)){
			header("location: MenuAdmin.php");
}

}


?>