<?php  

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Datos para el correo
$destinatario = "vdevfuture20@gmail.com";
$asunto = "Contacto desde el portafolio web ";

$carta = "to: $name \n";
$carta .= "email: $email \n";
$carta .= "phone: $phone \n";
$carta .= "message: $message";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:/mensaje-de-envio.html');

?>

 