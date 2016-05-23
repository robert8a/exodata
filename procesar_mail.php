<?php

$destinatario = "sosaheriberto2001@gmail.com";
$subject = "Consulta De Servicios En Exodata Solutions";
$mensaje = "Srs. Administradores \n\n{$_POST['nombre']} le ha enviado un mensaje.\n\n
Dice lo siguiente:\n\n {$_POST['mensaje']}\n\n
correo de contacto: {$_POST['correo']}\n\n ";
$cabecera = 'From: Pagina Web <info@exodatasolutions.com>'. "\r\n";

mail($destinatario, $subject, $mensaje, $cabecera);

?>

