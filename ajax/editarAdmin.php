<?php
  $id = $_GET['id'];
  $nom = $_GET['nom'];
  $cor = $_GET['cor'];
  $conexion = include_once("configconexion.php");
  echo $editarA = "UPDATE UsuariosAdmin SET nombre='$nom', correo='$cor' WHERE idAdmins = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($editarA);
?>
