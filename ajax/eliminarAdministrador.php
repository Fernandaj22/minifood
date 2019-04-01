<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");

  $idCafe = "SELECT * FROM cafeterias WHERE idEncargado = '$id'";
  $res=$conexion->query($idCafe);
  $r=$res->fetch_array();
  $productos = $r['idCafeteria'];

  $eliminar = "DELETE FROM UsuariosAdmin WHERE idAdmins = '$id'";
  $eliminarC = "DELETE FROM cafeterias WHERE idEncargado = '$id'";
  $eliminarP = "DELETE FROM productos WHERE idCafeteria = '$productos'";
  
  $conexion->query("SET NAMES 'utf8'");
  
  $conexion->query($eliminarP);
  $conexion->query($eliminarC);
  $conexion->query($eliminar);

 ?>