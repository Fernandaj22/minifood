<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");
  $eliminar = "DELETE FROM pedidos WHERE idPedido = '$id'";
  $eliminarD = "DELETE FROM detallepedido WHERE idPedido = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($eliminar);
  $conexion->query($eliminarD);
 ?>