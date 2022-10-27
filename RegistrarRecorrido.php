<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro de Rutas</title>
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
						<li>
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
			  <h1 class="text-titles text-center"> &#160; &#160;Registro de Rutas</h1>
                          
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Registrar</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista de Rutas</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="R-Registrar.php" method="POST">
									    	 <form action="R-Registrar.php" method="POST">
									    	<div class="form-group label-floating">
											  <label class="control-label">Código</label>
											  <input class="form-control" type="text"  name="codigo" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text"  name="nombre">
											</div>
                                                                                <div class="form-group label-floating">
											  <label class="control-label">Nomenclatura</label>
											  <input class="form-control" type="text" name="nomenclatura">
											</div>
                                              <div class="form-group label-floating">
											  <label class="control-label">Dias de servicio</label>
											  <input class="form-control" type="text" " name="dias_servicio">
											</div>
											
											  <div class="form-group label-floating">
											  <label class="control-label">Horario de servicio</label>
											  <input class="form-control" type="text"  name="horario_servicio">
											</div>

											  <div class="form-group label-floating">
											  <label class="control-label">Tiempo de recorrio</label>
											  <input class="form-control" type="text"  name="tiempo_recorrido">
											</div>

											<div class="form-group">
										 <label class="control-label">Disponibilidad</label>
										 <select class="form-control" name="disponibilidad" >
										  <option>En servicio</option>
										  <option>Fuera de servicio</option>
										 </select>
										</div>
										    <p class="text-center">
                                                <input type="submit" class="btn btn-info btn-raised btn-sm" value="Guardar">
                                                <input type="reset" class="btn btn-info btn-raised btn-sm" value="Limpiar">
                                            </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
                                                            <table id="lista" class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Codigo</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Nomenclatura</th>
                                           	<th class="text-center">Dias de servicio</th>
                                           	<th class="text-center">Horario de servicio</th>
                                           	<th class="text-center">Tiempo de recorrido</th>
                                           	<th class="text-center">Disponibilidad</th>
                                           	<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
											</tr>
											<?php
											include ("Conexion.php");

											$query="SELECT * FROM recorrido";
											$resultado=$conexion->query($query);
											while($row=$resultado->fetch_assoc()){
											?>

											<tr>
												<td><?php echo $row['codigo']; ?></td>
												<td><?php echo $row['nombre']; ?></td>
												<td><?php echo $row['nomenclatura']; ?></td>
												<td><?php echo $row['dias_servicio']; ?></td>
												<td><?php echo $row['horario_servicio']; ?></td>
												<td><?php echo $row['tiempo_recorrido']; ?></td>
												<td><?php echo $row['disponibilidad']; ?></td>
												<td><a  class="btn btn-success btn-raised btn-xs" href="ModificarRecorrido.php?codigo=<?php echo $row['codigo'] ?>"><i class="zmdi zmdi-refresh"></i></a></td>
												<td><a class="btn btn-danger btn-raised btn-xs" href="R-Eliminar.php?codigo=<?php echo $row['codigo'] ?>"><i class="zmdi zmdi-delete"></i></a></td>
											</tr>
										<?php
									}
									?>
									</thead>
								</table>
								
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