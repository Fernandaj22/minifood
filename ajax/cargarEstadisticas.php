<?php
  session_start();
  $id = $_SESSION['id'];
  
  $conexion = include_once("configconexion.php");   
  $conexion->query("SET NAMES 'utf8'");

  $cafeterias = "SELECT * FROM cafeterias ORDER BY idCafeteria DESC";
  $res = $conexion->query($cafeterias);

  $arregloCafeterias = array();
  while($r = $res->fetch_array()){
    $encargado = "SELECT * FROM UsuariosAdmin WHERE idAdmins = ".$r['idEncargado']." AND tipo = 2";
    $res2 = $conexion->query($encargado);
    $r2 = $res2->fetch_array();
    $arregloCafeterias[]=array(
      "id" => $r['idCafeteria'], 
      "nombreCafe" => $r['nombreCafeteria'],
      "encargado" => $r2['nombre'],
      "descripcion" => $r['descripcionCafeteria'],
      "importe" => $r['importe'],
      "strike" => $r['strike'],
      "ganancia" => $r['ganancia']
    );
  };
  echo json_encode($arregloCafeterias);
?>