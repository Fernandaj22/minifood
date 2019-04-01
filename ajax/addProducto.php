<?php
session_start();
echo $id = $_SESSION['id'];
$producto = $_GET['p'];
$descripcion = $_GET['d'];
$precio = $_GET['pre'];

$conexion = include_once("configconexion.php");

$encargado = "SELECT * FROM cafeterias WHERE idEncargado = $id";
$conexion->query("SET NAMES 'itf8'");
$resEnc = $conexion->query($encargado);
$re = $resEnc->fetch_array();
$cafe = $re['idCafeteria'];
$importeCafe = $re['importe'];


$productoNuevo = "INSERT INTO  productos (nombreProducto,descripcionProducto,precioUnitario,idCafeteria, precioImporte) VALUES ('$producto', '$descripcion', '$precio', '$cafe', $precio+$importeCafe)";
$conexion->query("SET NAMES 'utf8'");
$conexion->query($productoNuevo);
?>
