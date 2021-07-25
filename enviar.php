<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n ";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es:" . $mail . "\r\n";
$mensaje .= "Su telefono es:" . $phone . "\r\n";
$mensaje .= "Mensaje; " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "lleonel.90.8.6@gmail.com";
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
