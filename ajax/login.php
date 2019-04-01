<?php

session_start();
$usuario = $_GET['u'];
$password = $_GET['p'];

$conexion = include_once("configconexion.php");

$log = "SELECT * FROM UsuariosAdmin WHERE correo = '$usuario' AND password = '$password'";

$resultado = $conexion->query($log);
$res = $resultado->fetch_object();
if (mysqli_num_rows($resultado)==1) {
  $_SESSION['nombre'] = $res->nombre;
  $_SESSION['tipo'] = $res->tipo;
  $_SESSION['activo'] = $res->activo;
  $_SESSION['id'] = $res->idAdmins;
  if ($res->tipo==1) {
  	echo "1";
  }
}else{
  echo "0";
}
?>
