<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="cover" style="background-image: url(img/backgroundadmin.jpg);" >
	<form action="I-Sesion.php" method="" autocomplete="off" class="full-box logInForm">
            <p class="text-center text-muted"><img src="img/TransGO.png" width="150" height="150"></p>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserEmail">Usuario</label>
		  <input class="form-control" id="UserEmail" name="user" type="text">
		  
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" id="UserPass" name="pass" type="password">
		  
		</div>
		<div class="form-group text-center">
                    <input type="submit" value="Iniciar_Sesión" class="btn btn-raised btn-danger">
		</div>
	</form>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main_1.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>