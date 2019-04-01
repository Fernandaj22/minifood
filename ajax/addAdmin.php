<?php
	 $encargado = $_GET['nom'];
	 $correo = $_GET['correo'];
	 $pass = $_GET['pass'];
	 $tipo = $_GET['tipo'];

	$conexion = include_once("configconexion.php");
	$cafeencargado = "INSERT INTO usuariosadmin (nombre, correo, password, tipo)
										VALUES('$encargado','$correo','$pass','$tipo')";
	$conexion->query("SET NAMES 'utf8'");
	$conexion->query($cafeencargado);
?>
