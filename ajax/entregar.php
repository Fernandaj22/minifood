<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");
  $entregado = "UPDATE pedidos SET estado = 3 WHERE idPedido = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($entregado);
 ?>
