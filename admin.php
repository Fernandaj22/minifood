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
	<script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.2.4/email.min.js"></script>
	<script type="text/javascript">
	   (function(){
	      emailjs.init("user_9tD6CfEZbOAndyzo3WylK");
	   })();
	</script>
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

<div class="alertas_des" id="noti"></div>
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
			<li class="actual"><a href="admin.php">
				<img src="img/admins.png">
				<p>Administradores</p>
			</a></li>
			<li><a href="cafeterias.php">
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
	<div class="titulo"><img src="img/admins.png"><h1>Administradores</h1></div>
	<div class="buscador">
		<input type="text" id="bAdministrador" onkeyup="buscarAdministradores()" placeholder="¿Qué administrador buscas?">
		<button><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
<!-- ================= AGREGAR ADMINISTRADOR ============== -->
	<div class="cont" id="cont">
		<div class="nuevo">
			<input type="text" id="nomAdmin" placeholder="Usuario">
			<select id="tipo">
				<option value="2">Encargado de Cafetería</option>
				<option value="1">Administrador</option>
			</select>
			
            <input type="text" id="correo" placeholder="Correo">           
              <!-- <button type="submit">Verify!</button> -->
          	
			<!-- <input type="email" id="correo" placeholder="Correo" required data-validation="email"> -->

			<input type="password" id="pass1" placeholder="Contraseña">
			<input type="password" id="pass2" placeholder="Confirmar contraseña">
			<button  onclick="addAdmin()">Registrar</button>
		</div>
		<div id="adminAX"></div>
	</div>
</div>
</body>
<script>
	window.addEventListener('load', cargarDatosAdmin, true);
</script>
</html>



?>
