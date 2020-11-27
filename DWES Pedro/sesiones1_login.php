<?php
/* Formulario de login habitual. Si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php
Si va mal, mensaje de error */
function comprobar_usuario($nombre, $clave) {
    if ($nombre === "usuario" and $clave === "1234") {
        $usu["nombre"] = "usuario";
        $usu["rol"] = 0;
        return $usu;
    } elseif ($nombre === "admin" and $clave === "1234") {
        $usu["nombre"] = "admin";
        $usu["rol"] = 1;
        return $usu;
    } else return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST["usuario"], $_POST["clave"]);
    if ($usu == FALSE) {
        $err = TRUE;
        $usuario = $_POST["usuario"];
    } else {
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: sesiones1_principal.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulario de login</title>
</head>

<body>
    <?php if (isset($_GET["redirigido"])) {
        echo "<p> Haga login para continuar </p>";
    } ?>
    <?php if (isset($err) and $err == true) {
        echo "<p> Revise usuario y contraseña </p>";
    } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="usuario">Usuario:</label>
        <input value="<?php if (isset($usuario)) echo $usuario; ?>" type="text" name="usuario" id="usuario">
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave">
        <input type="submit">
    </form>
</body>

</html>