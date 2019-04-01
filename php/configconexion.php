<?php 
     //establecer conexión con la BD
     $conexion = new mysqli('localhost', "root", "", "minifood");
     mysqli_set_charset($conexion, 'utf8');
     if($conexion->connect_error){
     	die('Error de Conexión ('.$conexion->connect_errno.')'.$conexion->connect_error);
     }
     return $conexion;
 ?>