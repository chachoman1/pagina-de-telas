<?php
session_start(); // Inicia la sesión

// Verifica las credenciales (este es solo un ejemplo, debes reemplazarlo con tu lógica de autenticación real)
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verifica las credenciales (esto es solo un ejemplo, debes reemplazarlo con tu lógica real)
if ($usuario == 'usuario_correcto' && $contrasena == 'contrasena_correcta') {
    $_SESSION['usuario'] = $usuario; // Almacena el usuario en la sesión
    header('Location: dashboard.php'); // Redirige al panel de control o página de inicio después del inicio de sesión exitoso
    exit();
} else {
    // Las credenciales son incorrectas, maneja este caso según tus necesidades (por ejemplo, mostrar un mensaje de error)
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}
?>

<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php'); // Redirige al usuario a la página de inicio de sesión si no está autenticado
    exit();
}
?>

