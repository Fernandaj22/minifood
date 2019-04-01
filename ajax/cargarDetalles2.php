<?php 
	session_start();
	$id = $_SESSION['id'];
	$idP = 1;

	//conexión a la bd
	$conexion = include_once("configconexion.php");
	$conexion->query("SET NAMES 'utf8'"); 
	
	$detalle = "SELECT d.*, p.*, pro.* FROM detallepedido d, pedidos p, productos pro WHERE d.idPedidoD = '{$idP}' AND p.idPedido = d.idPedidoD AND pro.idProducto = d.idProductoD ORDER BY d.idPedidoD DESC"; 

	// $detalle = "SELECT * FROM detallepedido ORDER BY idPedidoD DESC";

	$dr = $conexion->query($detalle) or die("Last error: {$conexion->error}");

	$arregloDetalles = array();
	while ($r = $dr->fetch_array()) {
		$arregloDetalles[]=array(
	      "idPed" => $r['idPedidoD'],
	      "nombre" => $r['nombreProducto'],
	      "idPro" => $r['idProductoD'],
	      "especificaciones" => $r['especificaciones']
	    );
	}

	echo json_encode($arregloDetalles);
?>