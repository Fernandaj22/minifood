<?php

session_start();

$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$escuela = $_GET['escuela'];
$encargado = $_GET['encargado'];
$correo = $_GET['correo'];

$conex = mysqli_connect('localhost','root','','minifood');

echo $insertar = "INSERT INTO cafeterias (nombreCafeteria, descripcionCafeteria, escuela) VALUES ('{$nombre}','{$descripcion}','{$escuela}')";

mysqli_query($conex,$insertar);

 ?>
