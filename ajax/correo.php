<?php 
$destinatario = "ferjuareztirado@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Hola amigos!</h1> 
<p> 
<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Miguel Angel Alvarez <fernandajuareztirado@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: ferjuareztirado@gmail.com\r\n"; 


mail($destinatario,$asunto,$cuerpo,$headers) 
?>