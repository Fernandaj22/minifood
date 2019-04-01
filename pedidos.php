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
<div class="bg"></div>
<section class="alerta_cs">
	<h3>¿Desea cerrar sesión?</h3>
	<div id="sino">
		<input type="submit" value="Si" class="sino verde" onclick="salir()">
		<input type="submit" value="No" class="sino rojo" onclick="permanecer()">
	</div>
</section>
 
 
<div class="alertas_des">
	<h1>Pedidos recientes</h1>
	<div id="noti"></div>
	<a href="pedidos.php">Ver todos los pedidos</a>
</div>

<!-- =================== MENU ===================== -->
	<nav>
		<ul>
			<?php if($_SESSION['tipo']==2){ ?>
				<li class="logo" id="logo"><a href="pedidos.php"><img src="img/logo.png"></a></li>
			<?php }else{ ?>
				<li class="logo" id="logo"><a href="pedidos.php"><img src="img/logo.png"></a></li>
				<?php } ?>
			<?php if($_SESSION['tipo']==2){ ?>
				<li class="actual"><a href="pedidos.php">
					<img src="img/pedidos.png">
					<p>Pedidos</p>
				</a></li>
				<li><a href="productos.php">
					<img src="img/productos.png">
					<p>Productos</p>
				</a></li>
				<li><a href="comensal.php">
					<img src="img/comensal.png">
					<p>Comensales</p>
				</a></li>
			<?php } ?>
			<li><a href="estadisticas.php">
				<img src="img/estadisticas.png">
				<p>Estadísticas</p>
			</a></li>
			<?php if($_SESSION['tipo']==1){ ?>
				<li><a href="cafeterias.php">
					<img src="img/cafeterias.png">
					<p>Cafeterias</p>
				</a></li>
				<li><a href="admin.php">
					<img src="img/admins.png">
					<p>Administradores</p>
				</a></li>
			<?php } ?>
		</ul>
	</nav>

	<header class="header">
		<div class="user">
			<div id="datosUsuario">
				<h1><?php echo $_SESSION['nombre'] ?></h1>
			</div>
			<div class="notificaciones" onclick="desplegarAlertas()">
				<i class="fa fa-bell-o" aria-hidden="true"></i>
				<p id="contador"></p>
			</div>
			<div class="logout">
				<i class="fa fa-sign-out" aria-hidden="true" onclick="cerrarSesion()"></i>
			</div>
		</div>
	</header>

<!-- ================= BUSCADOR ================== -->
	<div class="contenedor">
		<div class="contbuscador">
			<div class="titulo"><img src="img/pedidos.png"><h1>Pedidos</h1></div>
			<div class="select">
				<div class="menupedidos">
					<div class="vacio"><p id="idn">Pedidos recientes</p></div>
					<button onclick="desplegarOpciones()"><i class="fa fa-angle-down" ></i></button>
				</div>
				<div class="opciones">
					<div class="opcion" onclick="tablarecientes()">
						<p>Recientes</p>
					</div>
					<div class="opcion" onclick="tablaproceso()">
						<p>En proceso</p>
					</div>
					<div class="opcion" onclick="tablaentregados()">
						<p>Entregados</p>
					</div>
					<div class="opcion" onclick="tablafinalizado()">
						<p>Finalizados</p>
					</div>
				</div>
			</div>
		</div>
<!-- ============== Pedidos ============== -->
		<div class="cont">
			<div id="pedidosAX">
				<div class="recientes" id="recientes"></div>
				<div class="enproceso" id="enproceso"><br></div>
				<div class="entregado" id="entregado"><br></div>
				<div class="finalizado" id="finalizado"><br></div>
			</div>
		</div>
	</div>
</body>
<script>
    window.addEventListener('load', cargarPedidos, true);
</script>
</html>
