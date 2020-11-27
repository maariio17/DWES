<?php
// Para cerrar la sesión no basta con llamar a session_destroy(). También hay que borrar las variables de sesión y la cookie
session_start();
$_SESSION = array();

session_destroy();

setcookie(session_name(), 123, time() - 1000);
header("Location: sesiones1_login.php");