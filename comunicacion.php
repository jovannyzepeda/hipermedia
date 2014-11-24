<?php

if(isset($_POST['email'])) {
$to      = 'pasteleria@lasdelicias.com';
$subject = 'Comentario pasteleria';
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['especificaciones'])) {
echo "<b>Ocurrió un problema en el envio le pedimos disculpas. </b><br/>";
die();
}

$message  = "Nombre: " . $_POST['nombre'] . "\n";
$message .= "correo: " . $_POST['email'] . "\n";
$message .="Telefono:".$_POST['telefono'] ."\n";
$message .="Domicilio: ".$_POST['domicilio']."\n";
$message .= "Comentarios: " . $_POST['especificaciones'] . "\n\n";


$headers = 'From: '.$_POST['email']."\r\n".
'Reply-To: '.$_POST['email']."\r\n".
'X-Mailer: PHP/' . phpversion();
@mail($to, $subject, $message, $headers);
}

?>