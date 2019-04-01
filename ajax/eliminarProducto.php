<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");
  $eliminar = "DELETE FROM productos WHERE idProducto = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($eliminar);
 ?>
