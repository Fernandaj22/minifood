<?php 
	session_start();
	$id = $_SESSION['id'];
  	$conexion = include_once("configconexion.php");
  	$conexion->query("SET NAMES 'utf8'");

	//obtener la cafe en sesión
	$encargado = "SELECT * FROM cafeterias WHERE idEncargado = $id";
	$resEnc = $conexion->query($encargado);

	//variables de la tabla cafeterias
	$re = $resEnc->fetch_array();
	$cafe = $re['idCafeteria'];

	//obtener ganancia
  	$ganancia = "UPDATE cafeterias SET ganancia = (total - subTotal) WHERE idCafeteria = '$cafe'";
  	$gr = $conexion->query($ganancia);
?>