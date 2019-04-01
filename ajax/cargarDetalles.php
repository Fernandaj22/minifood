<?php 
	session_start();
	$id = $_SESSION['id'];
	//conexión a la bd
	$conexion = include_once("configconexion.php");


	//obtener los detalles de los pedidos
	$productos = "SELECT * FROM detallepedido INNER JOIN pedidos ON pedidos.idPedido=detallepedido.idPedido";
	$conexion->query("SET NAMES 'utf8'");
	$pro = $conexion->query($productos);


	$respuesta = "";

	for ($x=0;$x<$pro->num_rows;$x++) {
	    $producto = $pro->fetch_object();      
	    $respuesta .= "<p>".$producto->idDetalle."</p>";
	    $respuesta .= "<p>".$producto->idProducto."</p>";
	    $respuesta .= "<p>".$producto->idPedido."</p>";
	    $respuesta .= "<p>".$producto->especificaciones."</p>";
	}

	if($pro->num_rows>=0){
	  echo $respuesta;
	}
	else{
	  echo "0";
	}

 ?>  