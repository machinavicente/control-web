<?php
    
    $servidor = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'sistem';

    $conexion = mysqli_connect($servidor, $user, $pass, $bd) or die("Error al conectar");


    // Manejar el envío del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["Admin_user"];
        $contrasena = $_POST["Admin_pass"];

        // Consultar la base de datos para verificar las credenciales
        $sql = "SELECT * FROM users WHERE usuario='$usuario' AND contrasena='$contrasena'";
        $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        // Credenciales válidas, iniciar sesión y redireccionar a la página principal

        session_start();
        $_SESSION['Admin_user'];
        header("Location: ./inicio.php");
        exit();
    } else {
        // Credenciales inválidas, mostrar un mensaje de error
        echo "Credenciales inválidas.";
    }
}

    // Cerrar la conexión
    $conexion->close();
?>