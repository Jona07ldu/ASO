<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Configura el correo electrónico
    $to = "contacto@aso.com";  // Cambia a tu correo real
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: $nombre\nCorreo: $email";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Gracias por contactarnos!";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
