<?php
session_start();
$id = $_SESSION['id'];
//conexión a la bd
$conexion = include_once("configconexion.php");

//obtener la cafe en sesión
$encargado = "SELECT * FROM cafeterias WHERE idEncargado = $id";
$conexion->query("SET NAMES 'utf8'");
$resEnc = $conexion->query($encargado);

//variables de la tabla cafeterias
$re = $resEnc->fetch_array();
$cafe = $re['idCafeteria'];
$importe = $re['importe'];    

// //obtener los pedidos
// $pedidos = "SELECT p.*, u.*, d.*, pro.* FROM pedidos p, usuarios u, productos pro, detallepedido d WHERE p.idCafeteria = '{$cafe}' AND p.idComensal=u.idUsuario AND u.estadoUsuario = 1 AND pro.idProducto = d.idProductoD AND p.idComensal = d.idComensalD AND p.idPedido = d.id ORDER BY p.idPedido DESC";

$pedidos = "SELECT p.*, u.* FROM pedidos p, usuarios u WHERE p.idCafeteria = '{$cafe}' AND p.idComensal=u.idUsuario AND u.estadoUsuario = 1 ORDER BY p.idPedido DESC";

$res = $conexion->query("SET NAMES 'utf8'");
$res = $conexion->query($pedidos);


$arregloPedidos = array();
  // while($r = $res->fetch_array()){
  //  $arregloPedidos[]=array(
  //     "id" => $r['idPedido'],
  //     "idCafeteria" => $r['idCafeteria'],
  //     "nombre" => $r['nombre'],
  //     "fechaPedido" =>  date('d/m/y H:i',strtotime($r['fechaPedido'])),
  //     "fechaEntrega" => date('d/m/y H:i',strtotime($r['fechaEntrega'])),
  //     "idComensal" => $r['idComensal'],
  //     "estado" => $r['estado'],
  //     "total" => $r['total'],
  //     "nombreP" => $r['nombreProducto'],
  //     "especificaciones" => $r['especificaciones']
  //   );
  // }

  while($r = $res->fetch_array()){
   $arregloPedidos[]=array(
      "id" => $r['idPedido'],
      "idCafeteria" => $r['idCafeteria'],
      "nombre" => $r['nombre'],
      "fechaPedido" =>  date('d/m/y H:i',strtotime($r['fechaPedido'])),
      "fechaEntrega" => date('d/m/y H:i',strtotime($r['fechaEntrega'])),
      "idComensal" => $r['idComensal'],
      "estado" => $r['estado'],
      "total" => $r['total'],
    );
  }
  echo json_encode($arregloPedidos);
?>
