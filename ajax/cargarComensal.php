<?php
session_start();
$id = $_SESSION['id'];

$conexion = include_once("configconexion.php");

//Obtener id de cafeteria en sesión
$cafeteria = "SELECT idCafeteria FROM cafeterias WHERE idEncargado = $id";
$conexion->query("SET NAMES 'utf8'");
$resCafe = $conexion->query($cafeteria);
$resCafeA = $resCafe->fetch_array();
$cafe = $resCafeA['idCafeteria'];


$usuarios = "SELECT * FROM usuarios WHERE idCafeteria = '{$cafe}' ORDER BY pedidosCancelados DESC";


// echo $pedidos;

$conexion->query("SET NAMES 'utf8'");
$res = $conexion->query($usuarios);
$arregloUsuarios = array();

  while($r = $res->fetch_array()){
   $arregloUsuarios[]=array(
      "idUsuario" => $r['idUsuario'],
      "nombre" => $r['nombre'],
      "apellidos" => $r['apellidos'],
      "idCafeteria" => $r['idCafeteria'],
      "pedidosCancelados" => $r['pedidosCancelados'],
      "estadoUsuario" => $r['estadoUsuario']
    );
  }
  echo json_encode($arregloUsuarios);
?>
