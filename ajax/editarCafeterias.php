<?php
  $id = $_GET['id'];
  $nom = $_GET['nom'];
  $desc = $_GET['desc'];
  $imp= $_GET['imp'];
  
  $conexion = include_once("configconexion.php");
  $editarC = "UPDATE cafeterias SET nombreCafeteria='$nom', descripcionCafeteria='$desc', importe='$imp' WHERE idCafeteria = '$id'";
  $conexion->query("SET NAMES 'utf8'");
  $conexion->query($editarC);
?>
