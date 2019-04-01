<?php
  $conexion = new mysqli('localhost','root','','minifood');
  $cafeterias = "SELECT * FROM cafeterias ORDER BY idCafeteria DESC";
  $conexion->query("SET NAMES 'utf8'");
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
      "correo" => $r2['correo'],
      "descripcion" => $r['descripcionCafeteria'],
      "importe" => $r['importe'],
      "strike" => $r['strike']
    );
  };
  echo json_encode($arregloCafeterias);
?>
