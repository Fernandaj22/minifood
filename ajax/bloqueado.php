<?php
  session_start();
  $id = $_SESSION['id'];
  $idComensal = $_GET['idComensal'];
  $conexion = include_once("configconexion.php");

  //Obtener id de cafeteria en sesión
  $cafeteria = "SELECT idCafeteria FROM cafeterias WHERE idEncargado = $id";
  $conexion->query("SET NAMES 'utf8'");
  $resCafe = $conexion->query($cafeteria);
  $resCafeA = $resCafe->fetch_array();
  $cafe = $resCafeA['idCafeteria'];

  echo $cafe;

  $finalizado = "UPDATE usuarios SET estadoUsuario = 0 WHERE idCafeteria = '$cafe' AND idUsuario = '$idComensal'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($finalizado);
 ?>
