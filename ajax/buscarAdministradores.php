<?php
session_start();
$id = $_SESSION['id'];
$busqueda = $_GET['administrador'];
$conexion = include_once("configconexion.php");


$administradores = "SELECT * FROM UsuariosAdmin WHERE nombre LIKE '%$busqueda%' ORDER BY idAdmins DESC";

  $conexion->query("SET NAMES 'utf8'");
  $res = $conexion->query($administradores);
  $arregloAdministradores = array();
  while($r = $res->fetch_array()){
     if($r['tipo'] == 2){
        $arregloAdministradores[]=array(
          "id" => $r['idAdmins'],
          "nombre" => $r['nombre'],
          "correo" => $r ['correo'],
          "tipo" => 'Encargado de Cafetería'
        );
      }else{
        $arregloAdministradores[]=array(
         "id" => $r['idAdmins'],
         "nombre" => $r['nombre'],
         "correo" => $r ['correo'],
         "tipo" => 'Administrador'
       );
      }
  }

  echo json_encode($arregloAdministradores);
?>