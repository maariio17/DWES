<?php
if (isset($_POST["username"]) && isset($_POST["phone"])) {
    if (mail("prueba@example.org", "Formulario", "Nombre: {$_POST["username"]}, teléfono: {$_POST["phone"]}")){
        echo "Correo enviado";
    } else {
        echo "Error al enviar el correo";
    }
}