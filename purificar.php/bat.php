<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $website = strip_tags(trim($_POST["website"]));
    $budget = strip_tags(trim($_POST["budget"]));
    $timeline = strip_tags(trim($_POST["timeline"]));
    $mensaje = trim($_POST["message"]);

    // Correo de destino (donde quieres recibir los mensajes)
    $destinatario = "dani619349@gmail.com";
    $asunto = "Nuevo mensaje de contacto de: $nombre";

    // Construir el cuerpo del mensaje
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Website: $website\n";
    $contenido .= "Budget: $budget\n";
    $contenido .= "Timeline: $timeline\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Cabeceras del correo
    $cabeceras = "From: $nombre <$email>";

    // Enviar correo
    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>