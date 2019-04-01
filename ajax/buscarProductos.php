<?php
session_start();
$id = $_SESSION['id'];
$busqueda = $_GET['producto'];
$conexion = include_once("configconexion.php");


$encargado = "SELECT * FROM cafeterias WHERE idEncargado = $id";
$conexion->query("SET NAMES 'itf8'");
$resEnc = $conexion->query($encargado);
$re = $resEnc->fetch_array();
$cafe = $re['idCafeteria'];



  $productos = "SELECT * FROM productos WHERE idCafeteria = $cafe AND nombreProducto LIKE '%$busqueda%' ORDER BY idProducto DESC";
  $conexion->query("SET NAMES 'utf8'");
  $res = $conexion->query($productos);
  $arregloProductos = array();
  while($r = $res->fetch_array()){
     $arregloProductos[]=array(
      "id" => $r['idProducto'],
      "producto" => $r['nombreProducto'],
      "descripcion" => $r ['descripcionProducto'],
      "precioUnitario" => $r['precioUnitario']
    );
  }

  echo json_encode($arregloProductos);
?>
