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



$pedidos = "SELECT p.*, u.nombre FROM pedidos p, usuarios u 
WHERE p.idCafeteria = '{$cafe}' 
AND p.idComensal=u.idUsuario
AND p.estado = 1
AND u.estadoUsuario = 1 
ORDER BY p.idPedido DESC";


$conexion->query("SET NAMES 'utf8'");
$res = $conexion->query($pedidos);
// $res2 = $conexion->query($contador);
$arregloPedidos = array();

  while($r = $res->fetch_array()){
   $arregloPedidos[]=array(
      "id" => $r['idPedido'],
      "idCafeteria" => $r['idCafeteria'],
      "nombre" => $r['nombre'],
      "fechaPedido" =>  date('d/m/y H:i',strtotime($r['fechaPedido'])),
      "fechaEntrega" => date('d/m/y H:i',strtotime($r['fechaEntrega'])),
      "idComensal" => $r['idComensal'],
      "estado" => $r['estado'],
      "total" => $r['total']
    );
  }
  echo json_encode($arregloPedidos);
?>
