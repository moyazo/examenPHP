<?php 

// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['sumbit'])) {
    $usuario = $_POST['name'];
    $password = $_POST['ps'];

    // validamos que recibimos ambos parámetros
    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña <br><br>";
        echo $error;
        include "index.php";
    } else {
        if (($usuario == "admin" && $password == "admin") || ($usuario == "usuario" && $password == "usuario")) {
            // almacenamos el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            // cargamos la página principal
            include "main.php";
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
           
            $error = "Usuario o contraseña no válidos! <br><br>";
            echo $error;
            include "index.php";
        }
    }
}


?>