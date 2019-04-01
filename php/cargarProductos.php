<?php
  $conexion = new mysqli('localhost','root','','minifood');
  $productos = "SELECT * FROM productos";
  $conexion->query("SET NAMES 'utf8'");
  $res = $conexion->query($productos);
  $response = array();
  $arregloProductos = array();
  while($r = $res->fetch_array()){
    $arregloProductos[]=array(
      "producto" => $r['nombreProducto'],
      "descripcion" => $r ['descripcionProducto'],
      "precio" => $r['precio']
    );
  }

  echo "hola!";
?>
