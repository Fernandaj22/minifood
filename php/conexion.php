<?php
  $conexion=mysqli_connect('localhost','root','','minifood');
  $us=$_GET['usuario'];
  $pass=$_GET['password'];

  $login="SELECT * FROM UsuariosAdmin WHERE correo='{$us}' AND password='{$pass}'";
  $resultado=mysqli_query($conexion, $login);
  $res=mysqli_fetch_array($resultado);

 ?>
