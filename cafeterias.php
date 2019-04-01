<?php
session_start();
if(!isset($_SESSION['tipo'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CAFETERÍAS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<!-- ============== ALERTAS ================= -->
<div id="msjE"></div>
<div id="alerta"></div>
<div class="bg"></div>
<section class="alerta_cs">
	<h3>¿Desea cerrar sesión?</h3>
	<div id="sino">
		<input type="submit" value="Si" class="sino verde" onclick="salir()">
		<input type="submit" value="No" class="sino rojo" onclick="permanecer()">
	</div>
</section>

	<section class="alertas_des">
		<h1>Pedidos recientes</h1>
		<div class="pedido_hecho no-vista">
			<img src="img/salir.png">
			<p>1 torta de huevo con jamón</p>
			<p>1 orden de enchiladas verdes s/queso</p>
		</div>
		<div class="pedido_hecho">
			<img src="img/salir.png">
			<p>1 torta de huevo con jamón</p>
			<p>1 orden de enchiladas verdes s/queso</p>
		</div>
		<div class="pedido_hecho no-vista">
			<img src="img/salir.png">
			<p>1 torta de huevo con jamón</p>
			<p>1 orden de enchiladas verdes s/queso</p>
		</div>

		<a href="pedidos.html">Ver todos los pedidos</a>
	</section>
<!-- =================== MENU ===================== -->
<nav>
	<ul>
		<?php if($_SESSION['tipo']==2){ ?>
			<li class="logo" id="logo"><a href="pedidos.php"><img src="img/logo.png"></a></li>
		<?php }else{ ?>
			<li class="logo" id="logo"><a href="estadisticas.php"><img src="img/logo.png"></a></li>
			<?php } ?>
		<?php if($_SESSION['tipo']==2){ ?>
			<li><a href="pedidos.php">
				<img src="img/pedidos.png">
				<p>Pedidos</p>
			</a></li>
			<li><a href="productos.php">
				<img src="img/productos.png">
				<p>Productos</p>
			</a></li>
		<?php } ?>
		<li><a href="estadisticas.php">
			<img src="img/estadisticas.png">
			<p>Estadísticas</p>
		</a></li>
		<?php if($_SESSION['tipo']==1){ ?>
			<li><a href="admin.php">
				<img src="img/admins.png">
				<p>Administradores</p>
			</a></li>
			<li class="actual"><a href="cafeterias.php">
				<img src="img/cafeterias.png">
				<p>Cafeterias</p>
			</a></li>
		<?php } ?>
	</ul>
</nav>

	<header class="header">
		<div class="user">
			<div id="datosUsuario">
				<h1><?php echo $_SESSION['nombre'] ?></h1>
			</div>
			<?php if($_SESSION['tipo']==2){ ?>
			<div class="notificaciones" onclick="desplegarAlertas()">
				<i class="fa fa-bell-o" aria-hidden="true"></i>
				<p></p>
			</div>
			<?php } ?>
			<div class="logout">
				<i class="fa fa-sign-out" aria-hidden="true" onclick="cerrarSesion()"></i>
			</div>
		</div>
	</header>

<!-- ================= BUSCADOR ================== -->
	<div class="contenedor">
		<div class="contbuscador">
			<div class="titulo"><img src="img/cafeterias.png"><h1>Cafeterías</h1></div>
			<div class="buscador">
				<input type="text" id="bCafeteria" onkeyup="buscarCafeterias()" placeholder="¿Qué cafetería estás buscando?">
				<button><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>
		</div>
		<!-- ============== AGREGAR CAFETERIA ============== -->
		<div class="cont" id="cont">
			<div class="nuevo">
				<input type="text" id="nomCaf" placeholder="Nombre de la Cafetería">
				<select id="SelectAX"></select>
				<input type="number" id="importe" placeholder="$ 0.0">
				<input type="number" id="strike" placeholder="Strike">
				<textarea placeholder="Descripción..." id="desc"></textarea>
				<button onclick="addCafeteria()">Registrar</button>
			</div>

			<div id="cafeteriasAX"></div>
		</div>
	</div>
</body>
<script>
		window.addEventListener('load', cargarDatosCafeterias, true);
</script>
</html>
