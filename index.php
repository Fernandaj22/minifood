<?php
session_start();
if(isset( $_SESSION['tipo'])){
	header('Location: pedidos.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INICIO DE SESIÓN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo-login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<div id="msjE"></div>
<div id="load"></div>
	<section class="clogin">
		<h1>Minifood</h1>
		<!-- <img src="img/fruit-salad.png"> -->
		<div class="input">
			<input type="text" id="usuario" placeholder="Usuario">
			<input type="password" id="password" placeholder="Contraseña">
		</div>
		<button class="boton" onclick="login()">Ingresar</button>
	</section>
</body>
</html>
