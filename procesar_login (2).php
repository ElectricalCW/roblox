<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera y limpia los datos del formulario
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Verifica las credenciales (ejemplo simple, en una aplicación real, usarías una base de datos)
    $correct_username = 'usuario';  // Reemplaza con el nombre de usuario correcto
    $correct_password = 'contrasena';  // Reemplaza con la contraseña correcta

    if ($username === $correct_username && $password === $correct_password) {
        // Las credenciales son correctas, podrías iniciar una sesión aquí si es necesario
        // Enviar una respuesta JSON, redirigir, o realizar otras acciones según tus necesidades

        // Redirige a una página de éxito o a donde desees
        header("Location: exito.php");
        exit();
    } else {
        // Las credenciales son incorrectas, podrías mostrar un mensaje de error
        echo "Credenciales incorrectas. Intenta nuevamente.";
    }
}
?>
