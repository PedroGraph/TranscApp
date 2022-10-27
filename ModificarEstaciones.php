<!DOCTYPE html>
<html lang="es">
<head>
	<title>Modificar Estaciones</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="font-awesome.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="MenuAdmin.php">
						<i class="fa fa-home"></i> Inicio
					</a>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="fa fa-flag-checkered"></i> Estaciones <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="RegistrarEstaciones.php"><i class="fa fa-check"></i> Registrar Estaciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="fa fa-bus"></i> Buses <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="RegistrarBuses.php"><i class="fa fa-check"></i> Registrar Buses</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="fas fa-route"></i> Rutas <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="RegistrarRecorrido.php"><i class="fa fa-check"></i> Registrar Rutas</a>
						</li>
					</ul>
				</li>
                                <li>
					<a class="btn-sideBar-SubMenu">
						<i class="fa fa-flag-checkered"></i> Estaciones- Buses <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="Registrar_EstacionBuses.php"><i class="fa fa-check"></i> Registrar Estaciones - Buses</a>
						</li>
					</ul>
				</li>
                                <li>
					<a class="btn-sideBar-SubMenu">
						<i class="fa fa-flag-checkered"></i> Recorrido- Buses <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="Registrar_RecorridoBuses.php"><i class="fa fa-check"></i> Registrar Recorrido - Buses</a>
						</li>
					</ul>
				</li>
                                <li>
					<a class="btn-sideBar-SubMenu">
						<i class="fa fa-flag-checkered"></i> Estaciones - Recorrido <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="Registrar_RecorridoEstacion.php"><i class="fa fa-check"></i> Registrar Recorrido - Buses</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
					</a>
				</li>
                                <li>
                                    <a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
                                </li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles text-center"> &#160; &#160;Modificar Buses</h1>
			
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="crear" data-toggle="tab">Modificar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="crear">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form method="POST" action="E-Modificar.php">
															
											<?php
											$codigo=$_REQUEST['codigo'];
											include ("Conexion.php");
											$query="SELECT * FROM estaciones WHERE codigo='$codigo'";
											$resultado=$conexion->query($query);
											$row=$resultado->fetch_assoc();
											?>				

									   <div class="form-group label-floating">
									   <label class="control-label">Codigo</label>
									   <input class="form-control" type="number" name="codigo" value="<?php echo $row['codigo']; ?>">
									   </div>
										<div class="form-group label-floating">
										<label class="control-label">Nombre</label>
									    <input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
										</div>
					                    <div class="form-group label-floating">
										<label class="control-label">Número de Módulos</label>
										<input class="form-control" type="number" min="1" max="2" name="nummodulos" value="<?php echo $row['nummodulos']; ?>">
										</div>
                                         <div class="form-group label-floating">
										<label class="control-label">Numero de Taquillas</label>
										 <input class="form-control" type="number" min="2" max="4" name="numtaquillas" value="<?php echo $row['numtaquillas']; ?>">
										</div>
                                         <div class="form-group label-floating">
										<label class="control-label">Hora de Apertura</label>
								 		<input class="form-control" type="time" name="horainicio" value="<?php echo $row['horainicio']; ?>">
										</div>
                                         <div class="form-group label-floating">
										<label class="control-label">Hora de Cierre</label>
										<input class="form-control" type="time" name="horacierre" value="<?php echo $row['horacierre']; ?>">
										</div>
					                    <div class="form-group">
										 <label class="control-label">Estado</label>
										 <select class="form-control" name="estado" value="<?php echo $row['estado']; ?>">
										  <option>Disponible</option>
										  <option>Fuera de servicio</option>
										 </select>
										</div>
										    <p class="text-center">
										    	<input type="submit" class="btn btn-info btn-raised btn-sm" value="Modificar">
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
		</div>
	</section>

	<!-- Dialog help -->
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>