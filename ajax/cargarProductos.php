<?php
session_start();
$id = $_SESSION['id'];

$conexion = include_once("configconexion.php");


$encargado = "SELECT * FROM cafeterias WHERE idEncargado = $id";
$conexion->query("SET NAMES 'utf8'");
$resEnc = $conexion->query($encargado);
$re = $resEnc->fetch_array();
$cafe = $re['idCafeteria'];
$importe = $re['importe'];


  $productos = "SELECT * FROM productos WHERE idCafeteria = '{$cafe}' ORDER BY idProducto DESC";
  $conexion->query("SET NAMES 'utf8'");
  $res = $conexion->query($productos);
  $arregloProductos = array();
  // print_r($res);
  while($r = $res->fetch_array()){
     $arregloProductos[]=array(
      "id" => $r['idProducto'],
      "producto" => $r['nombreProducto'],
      "descripcion" => $r['descripcionProducto'],
      "precioUnitario" => $r['precioUnitario'],
      "importe" => $re['importe'],
      "noEstrellas" => $r['noEstrellas']
    );
  }
  echo json_encode($arregloProductos);
?>
