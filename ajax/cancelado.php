<?php
  $id = $_GET['id'];
  $idComensal = $_GET['idComensal'];
  $conexion = include_once("configconexion.php");

  $finalizado = "UPDATE pedidos SET estado = 4 WHERE idPedido = '$id'";
  $cancelado = "UPDATE usuarios SET pedidosCancelados = (pedidosCancelados+1) WHERE idUsuario = '$idComensal'";

  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($finalizado);
  $conexion->query($cancelado);
 ?>
