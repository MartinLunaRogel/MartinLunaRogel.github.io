<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
  $destinatario = "martinluna.rg@gmail.com";
  
  $asunto = "Nuevo mensaje de contacto";
  $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
  
  if (mail($destinatario, $asunto, $cuerpo)) {
    echo "Mensaje enviado con éxito.";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>
