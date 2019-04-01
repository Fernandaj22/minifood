<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");
  $finalizado = "UPDATE pedidos SET estado = 4 WHERE idPedido = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($finalizado);
 ?>
