<?php
  $server = 'localhost';
   $user = 'root';
   $pass = '';
   $bd = 'sistem';

   // Crear conexión
   $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");

$sql = "SELECT COUNT(*) FROM piso_uno";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Print the result
    while ($row = $result->fetch_assoc()) {
        echo $row["COUNT(*)"];
    }
} else {
    echo "0 results";
}

$conexion->close();

?>