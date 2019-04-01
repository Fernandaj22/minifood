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



$cont = "SELECT count(p.idPedido), u.idUsuario 
FROM pedidos p, usuarios u
WHERE p.idCafeteria = '{$cafe}' 
AND p.idComensal=u.idUsuario
AND p.estado = 1";


$conexion->query("SET NAMES 'utf8'");
$res = $conexion->query($cont);
$row = $res->fetch_array(MYSQLI_NUM);

if($res->num_rows>=0){
  echo $row[0];
}
else{
  echo "0";
}

?>
