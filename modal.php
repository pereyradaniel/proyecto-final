<?php
$destinatario = 'pereyradaniell@gmail.com';

$nombre = $_POST ['inputNombre'];
$apellido = $_POST ['inputApellido'];
$telefono = $_POST ['inputTel'];
$email = $_POST ['inputMail'];

$header = "Enviado desde el formulario de pedido de Demo";
$mensajeCompleto = $mensaje ."\nAtentamente: " . $nombre;

mail($destinatario, $nombre, $apellido, $telefono, $email, $mensajeCompleto, $header);
echo "<script> alert ('correo enviado correctamente')</script>";
echo "<script> setTimeout ('\location.href='index.html'\",1000)</script>";
?> 