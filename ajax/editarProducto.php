<?php
  $id = $_GET['id'];
  $nom = $_GET['nom'];
  $pre = $_GET['pre'];
  $desc = $_GET['desc'];
  $conexion = include_once("configconexion.php");
  $editarP = "UPDATE productos SET nombreProducto='$nom', descripcionProducto='$desc', precio='$pre' WHERE idProducto = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($editarP);
?>
