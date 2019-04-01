<?php
	$conexion = include_once("configconexion.php");
  	$encargados = "SELECT * FROM UsuariosAdmin WHERE tipo = 2 AND activo = 0";
  	$conexion->query("SET NAMES 'utf8'");
  	$res = $conexion->query($encargados);
  	$arregloEncargados = array();
  	while($r = $res->fetch_array()){
	    $arregloEncargados[]=array(
	      "nombre" => $r['nombre']
	    );
  	}

  	echo json_encode($arregloEncargados);
?>