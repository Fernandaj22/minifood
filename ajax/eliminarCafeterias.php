<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");
  
  $ec = "SELECT * FROM cafeterias WHERE idCafeteria = '$id'";
	  $res = $conexion->query($ec);
	  $r = $res->fetch_array();
	  $idUsuario = $r['idEncargado'];

  $admin = "UPDATE UsuariosAdmin SET activo = '0' WHERE idAdmins = '$idUsuario'";

  $productos ="DELETE FROM productos WHERE idCafeteria ='$id'";

  $eliminar = "DELETE FROM cafeterias WHERE idCafeteria = '$id'";
  
  $conexion->query("SET NAMES 'utf8'");

  $conexion->query($admin);
  $conexion->query($productos);
  $conexion->query($eliminar);
 ?>
