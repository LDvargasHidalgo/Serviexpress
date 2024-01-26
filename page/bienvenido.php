<?php
session_start(); // Iniciar la sesión al comienzo del script

// Verificar si el usuario está logueado (es decir, si la variable 'usuario' está seteada en $_SESSION)
if (isset($_SESSION['usuario'])) {
    // El usuario está logueado, mostrar contenido protegido
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
    </head>


    <body>
        <h1>BIENVENIDO <?php echo $_SESSION['usuario']; ?></h1>
        <a href="../php/cerrar_sesion.php">Cerrar sesión</a>
    </body>
    </html>
<?php
} else {
    // El usuario no está logueado, redirigir a la página de inicio de sesión o mostrar un mensaje de error
    header("Location: index.php"); // Asegúrate de que este archivo exista y sea el correcto para la redirección
    exit;
}
?>
