<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Aquí puedes enviar los datos por correo o almacenarlos en una base de datos
    echo "Gracias, $nombre. Hemos recibido tu mensaje.";
}
?>
