<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
							<a href="Registrar_RecorridoEstacion.php"><i class="fa fa-check"></i> Registrar Recorrido - Estaciones</a>
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
		
		<div class="full-box text-center" style="padding: 30px 10px;">
          		<!-- CONEXION PARA EL CONTEO DE LA TABLA BUSES -->
				<?php
				include ("Conexion.php");

				$query="select count(*) as num from buses";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>

                    <a href="RegistrarBuses.php">
			<article class="full-box tile" href="RegistrarBuses.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Buses
				</div>
				<div class="full-box tile-icon text-center">
					<i class="fa fa-bus"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"> <?php echo $row['num']; ?></p>
					<small>Registrados</small>
				</div>
			</article>
					<?php
					}
					?>
                    </a>
          		<!--  CONEXIÓN CERRADA PARA LA TABLA BUSES -->


				<!--  CONEXIÓN PARA EL CONTEO DE LA TABLA ESTACIONES -->
		
				<?php
				include ("Conexion.php");

				$query="select count(*) as num from estaciones";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>

                    <a href="RegistrarEstaciones.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estaciones
				</div>
				<div class="full-box tile-icon text-center">
					<i class="fa fa-stop-circle"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"> <?php echo $row['num']; ?> </p>
					<small>Registradas</small>
				</div>
			</article>
					<?php
					}
					?>
                    </a>

                    <!--  CONEXIÓN CERRADA PARA LA TABLA ESTACIONES -->

                    <!--  CONEXIÓN PARA EL CONTEO DE LA TABLA ESTACIONES -->
		
				<?php
				include ("Conexion.php");

				$query="select count(*) as num from recorrido";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>
                    <a href="RegistrarRecorrido.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Rutas
				</div>
				<div class="full-box tile-icon text-center">
					<i class="fas fa-route"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"> <?php echo $row['num']; ?> </p>
					<small>Registradas</small>
				</div>
			</article>
				<?php 
					}
					?>
                    </a>
                    <!--  CONEXIÓN CERRADA PARA LA TABLA ESTACIONES -->


                    <!--  CONEXIÓN PARA EL CONTEO DE LA TABLA ESTACIONES_RECORRIDO -->
		
				<?php
				include ("Conexion.php");

				$query="select count(*) as num from estaciones_recorrido";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>
		
                    <a href="Registrar_RecorridoEstacion.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estaciones - Recorrido
				</div>
				<div class="full-box tile-icon text-center">
					<i class="fa fa-retweet"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $row['num']; ?></p>
					<small>Registradas</small>
				</div>
			</article>
					<?php 
					}
					?>
                    </a>
                    <!--  CONEXIÓN CERRADA PARA LA TABLA ESTACIONES -->


				<!--  CONEXIÓN PARA EL CONTEO DE LA TABLA ESTACIONES -->
		
				<?php
				include ("Conexion.php");

				$query="select count(*) as num from estaciones_buses";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>
                     <a href="Registrar_RecorridoBuses.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estaciones - Buses
				</div>
				<div class="full-box tile-icon text-center">
					<i class="fa fa-retweet"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $row['num']; ?></p>
					<small>Registradas</small>
				</div>
			</article>
			<?php 
					}
					?>
                    </a>
                    <!--  CONEXIÓN CERRADA PARA LA TABLA ESTACIONES -->

                    <!--  CONEXIÓN PARA EL CONTEO DE LA TABLA ESTACIONES -->
		
				<?php
				include ("Conexion.php");

				$query="select count(*) as num from recorrido_buses";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				?>
                    <a href="Registrar_RecorridoEstacion.php">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Recorrido - Buses
				</div>
				<div class="full-box tile-icon text-center">
					<i class="fa fa-retweet"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $row['num']; ?></p>
					<small>Registradas</small>
				</div>
			</article>
                    <?php 
					}
					?>
                    </a>
                    <!--  CONEXIÓN CERRADA PARA LA TABLA ESTACIONES -->
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>

		</div>
	</section>
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