<?php 
	session_start();
  	$id = $_SESSION['id'];
  	$idProducto = $_GET['idProducto'];
  	$conexion = include_once("configconexion.php");

  	$promedio = "UPDATE productos SET totalEstrellas = (totalEstrellas+4), noCalificado = (noCalificado+1), noEstrellas=(totalEstrellas/noCalificado) WHERE idProducto = '$idProducto'";
  	$conexion->query("SET NAMES 'utf8'");
  	$conexion->query($promedio);	

 ?>