<?php
	$conexion = include_once("configconexion.php");
  	$admins = "SELECT * FROM UsuariosAdmin ORDER BY idAdmins DESC";
  	$conexion->query("SET NAMES 'utf8'");
  	$res = $conexion->query($admins);
  	$arregloAdmins = array();
  	while($r = $res->fetch_array()){
			if($r['tipo'] == 2){
		    $arregloAdmins[]=array(
					"id" => $r['idAdmins'],
		      		"nombre" => $r['nombre'],
		      		"correo" => $r ['correo'],
					"tipo" => 'Encargado de Cafetería'
		    );
			}else{
				$arregloAdmins[]=array(
				 "id" => $r['idAdmins'],
				 "nombre" => $r['nombre'],
				 "correo" => $r ['correo'],
				 "tipo" => 'Administrador'
			 );
			}
  	}

  	echo json_encode($arregloAdmins);
?>
