<?php
session_start();
$id = $_SESSION['id'];
$busqueda = $_GET['cafeteria'];
$conexion = include_once("configconexion.php");


$cafeterias = "SELECT * FROM cafeterias AS a JOIN UsuariosAdmin AS b ON a.idEncargado = b.idAdmins WHERE nombreCafeteria LIKE '%$busqueda%' AND tipo = 2 ORDER BY idCafeteria DESC";

  $conexion->query("SET NAMES 'utf8'");
  $res = $conexion->query($cafeterias);
  $arregloCafeterias = array();
  while($r = $res->fetch_array()){
     $arregloCafeterias[]=array(
      "id" => $r['idCafeteria'],
      "cafe" => $r['nombreCafeteria'],
      "descripcion" => $r ['descripcionCafeteria'],
      "encargado" => $r['nombre'],
      "correo" => $r['correo']
    );
  }

  echo json_encode($arregloCafeterias);
?>