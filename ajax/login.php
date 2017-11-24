<?php
 $usuario = $_GET['u'];
 $password = $_GET['p'];

$conexion = mysqli('localhost','root','','minifood')
$login = "SELECT count(*) AS cant FROM UsuariosAdmin WHERE correo = '{$usuario}' AND password == '{$password}'";
$resultado = mysqli_query($conexion, $login);
$res = mysqli_fetch_array($resultado);
if ($res [$cant]==1) {
  echo "1";
}else{
  echo "0";
}
?>
