<?php
	 $nomCafeteria = $_GET['nCafe'];
	 $encargado = $_GET['enc'];
	 $descripcion = $_GET['des'];
	 $importe = $_GET['importe'];
	 $strike = $_GET['strike'];

	$conexion = include_once("configconexion.php");
	
	$e = "SELECT * FROM UsuariosAdmin WHERE nombre = '$encargado'";
	$conexion->query("SET NAMES 'utf8'");
	$res = $conexion->query($e);
	$r = $res->fetch_array();
	$idE = $r['idAdmins'];

	$cafeteriaNueva = "INSERT INTO  cafeterias (idEncargado,nombreCafeteria,descripcionCafeteria,importe, strike) VALUES ('$idE','$nomCafeteria', '$descripcion', '$importe', '$strike')";

	echo $adminActivo = "UPDATE UsuariosAdmin SET activo ='1' WHERE idAdmins ='$idE'";

	$conexion->query($cafeteriaNueva);
	echo $conexion->query($adminActivo);
?>
