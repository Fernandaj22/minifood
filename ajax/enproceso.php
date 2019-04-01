<?php
  $id = $_GET['id'];
  $conexion = include_once("configconexion.php");
  $proceso = "UPDATE pedidos SET estado = 2 WHERE idPedido = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($proceso);
 ?>
