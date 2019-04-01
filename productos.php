<?php
session_start();
 // $_SESSION['activo'];
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

<div class="alertas_des" id="noti"></div>
<!-- =================== MENU ===================== -->
<nav>
	<ul>
		<?php if($_SESSION['tipo']==2){ ?>
			<li class="logo" id="logo"><a href="pedidos.php"><img src="img/logo.png"></a></li>
		<?php }else{ ?>
			<li class="logo" id="logo"><a href="pedidos.php"><img src="img/logo.png"></a></li>
			<?php } ?>
		<?php if($_SESSION['tipo']==2){ ?>
			<li><a href="pedidos.php">
				<img src="img/pedidos.png">
				<p>Pedidos</p>
			</a></li>
			<li class="actual"><a href="productos.php">
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
<!-- =================== ENCABEZADO ================= -->
	<header class="header">
		<div class="user">
			<div id="datosUsuario">
				<h1><?php echo $_SESSION['nombre'] ?></h1>
			</div>
			<div class="notificaciones" onclick="desplegarAlertas()">
				<i class="fa fa-bell-o" aria-hidden="true"></i>
				<p></p>
			</div>
			<div class="logout">
				<i class="fa fa-sign-out" aria-hidden="true" onclick="cerrarSesion()"></i>
			</div>
		</div>
	</header>
<!-- ================= BUSCADOR ================== -->
<div class="contenedor">
	<div class="titulo"><img src="img/productos.png"><h1>Productos</h1></div>
	<div class="buscador">
		<input type="text" id="bProductos" onkeyup="buscarProductos()" placeholder="¿Qué producto buscas?">
		<button><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
<!-- ============== AGREGAR PRODUCTO ============== -->
	<div class="cont" id="cont">
		<?php if($_SESSION['activo']==1){ ?>
		<div class="nuevo">
			<input type="text" id="producto" placeholder="Nombre">
			<p id="Sip" style="display: none;">$</p>
			<input type="number" id="precio" placeholder="$0.00" onclick="peque()" pattern="[^()/<>[\]\\+-,'|\x22]+">
			<textarea id="descProducto" placeholder="Descripción del producto..."></textarea>

			<button onclick="addProducto()" id="addP">Registrar</button>
		</div>
		<?php } else{ ?>
		<?php if($_SESSION['activo']==0){ ?>
			<p class="noencargado">Para agregar productos deberás ser encargado de cafetería.</p>
			<p class="noencargado">Contacta con el administrador</p>
		<?php } ?>
		<?php } ?>

		<div id="productosAX"></div>
	</div>
</div>
</body>
<script>
	window.addEventListener('load', cargarDatos, true);
	// window.addEventListener('load', bloquearImporte, true);
</script>
</html>
